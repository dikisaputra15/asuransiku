<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Suratpengantar;
use App\Models\Pesertaasuransi;
use App\Models\Periksakesehatan;
use App\Models\User;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use PDF;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $diproses = Pesertaasuransi::where('status', 'diproses')->count();
        // $diterima = Pesertaasuransi::where('status', 'diterima')->count();
        // $ditolak = Pesertaasuransi::where('status', 'ditolak')->count();

        return view('pages.dashboard');
    }

    public function baperiksa()
    {
        $periksas = DB::table('periksakesehatans')
        ->join('users', 'users.id', '=', 'periksakesehatans.id_peserta')
        ->select('periksakesehatans.*', 'users.name')
        ->orderBy('periksakesehatans.id', 'desc')
        ->get();
        return view('pages.periksas.listba', compact('periksas'));
    }

    public function permohonan()
    {
        $permohonans = DB::table('suratpengantars')
        ->join('users', 'users.id', '=', 'suratpengantars.id_user')
        ->select('suratpengantars.*', 'users.name')
        ->orderBy('suratpengantars.id', 'desc')
        ->get();
        return view('pages.periksas.permohonan', compact('permohonans'));
    }

    public function lihatpdfpengajuan(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $laporans = DB::table('pesertaasuransis')
        ->join('users', 'users.id', '=', 'pesertaasuransis.id_user')
        ->select('pesertaasuransis.*', 'users.name')
        ->whereBetween('tgl_pengajuan', [$start_date, $end_date])
        ->where('keterangan', 'diterima')
        ->get();

        $pdf = PDF::loadView('lappengajuanpdf', compact('laporans'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('lappengajuanpdf.pdf');
    }

    public function informasi()
    {
        $id = auth()->user()->id;
        $pesertas = DB::table('pesertaasuransis')
        ->join('users', 'users.id', '=', 'pesertaasuransis.id_user')
        ->select('pesertaasuransis.*', 'users.name')
        ->where('pesertaasuransis.id_user', $id)
        ->orderBy('pesertaasuransis.id', 'desc')
        ->get();
        return view('pages.pesertas.informasi', compact('pesertas'));
    }

    public function sk($id)
    {
        $peserta = Pesertaasuransi::find($id);
        $id_peserta = $peserta->id_user;
        $tim = DB::table('periksakesehatans')->where('id_peserta', $id_peserta)->first();
        $id_periksa = $tim->id;
        $peternak = User::find($id_peserta);
        $details = DB::table('detailperiksas')->where('id_periksa', $id_periksa)->orderBy('detailperiksas.id', 'desc')->get();

        //QR Code
        $renderer = new ImageRenderer(
            new RendererStyle(200),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $data = "https://conoha.my.id/detail/$peserta->id/detailpeserta";
        $qrCodeImage = base64_encode($writer->writeString($data));

        $pdf = PDF::loadView('skpdf', compact('details','tim','peserta','peternak','qrCodeImage'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('skpdf.pdf');
    }

    public function filtermohon(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $keterangan = $request->keterangan;

        $pesertas = DB::table('pesertaasuransis')
        ->join('users', 'users.id', '=', 'pesertaasuransis.id_user')
        ->select('pesertaasuransis.*', 'users.name')
        ->whereBetween('pesertaasuransis.tgl_pengajuan', [$start_date, $end_date])
        ->where('pesertaasuransis.keterangan', $keterangan)
        ->get();
        return view('pages.pesertas.hasilfilter', compact('pesertas'));
    }

    public function detailpeserta($id)
    {
        $peserta = Pesertaasuransi::find($id);
        $nama = User::find($peserta->id_user);
        return view('pages.pesertas.detailpeserta', compact('peserta','nama'));
    }
}
