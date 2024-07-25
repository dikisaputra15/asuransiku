<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Suratpengantar;
use App\Models\Pesertaasuransi;
use App\Models\Periksakesehatan;
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
        ->join('pesertaasuransis', 'pesertaasuransis.id', '=', 'periksakesehatans.id_peserta')
        ->select('periksakesehatans.*', 'pesertaasuransis.nama_peternak')
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

        $laporans = Pesertaasuransi::whereBetween('tgl_pengajuan', [$start_date, $end_date])->where('status', 'diterima')->get();

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
        $tim = DB::table('periksakesehatans')->where('id_peserta', $id)->first();
        $id_periksa = $tim->id;

        $details = DB::table('detailperiksas')->where('id_periksa', $id_periksa)->orderBy('detailperiksas.id', 'desc')->get();

        $pdf = PDF::loadView('skpdf', compact('details','tim','peserta'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('skpdf.pdf');
    }
}
