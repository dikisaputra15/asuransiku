<?php

namespace App\Http\Controllers;

use App\Models\Periksakesehatan;
use App\Models\Detailperiksa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;

class PeriksakesehatanController extends Controller
{
    public function index(Request $request)
    {
        $periksas = DB::table('periksakesehatans')
        ->join('users', 'periksakesehatans.id_peserta', '=', 'users.id')
        ->select('periksakesehatans.*', 'users.name')
        ->orderBy('periksakesehatans.id', 'desc')
        ->get();
        return view('pages.periksas.index', compact('periksas'));
    }

    public function create()
    {
        $pesertas = DB::table('pesertaasuransis')
        ->join('users', 'pesertaasuransis.id_user', '=', 'users.id')
        ->select('pesertaasuransis.id_user', 'users.name', 'users.id')
        ->get();
        return view('pages.periksas.create', compact('pesertas'));
    }

    public function store(Request $request)
    {
        Periksakesehatan::create([
            'id_peserta' => $request->id_peserta,
            'tgl_pemeriksaan' => $request->tgl_pemeriksaan,
            'pemeriksa1' => $request->pemeriksa1,
            'pemeriksa2' => $request->pemeriksa2
        ]);

        return redirect()->route('periksakesehatan.index')->with('success', 'Data successfully created');
    }

    public function edit($id)
    {
        $periksakesehatan = \App\Models\Periksakesehatan::findOrFail($id);
        $pesertas = DB::table('pesertaasuransis')
            ->join('users', 'pesertaasuransis.id_user', '=', 'users.id')
            ->select('pesertaasuransis.id_user', 'users.name', 'users.id')
            ->get();
        return view('pages.periksas.edit', compact('periksakesehatan','pesertas'));
    }

    public function update(Request $request, $id)
    {
        DB::table('periksakesehatans')->where('id',$id)->update([
            'id_peserta' => $request->id_peserta,
            'tgl_pemeriksaan' => $request->tgl_pemeriksaan,
            'pemeriksa1' => $request->pemeriksa1,
            'pemeriksa2' => $request->pemeriksa2
        ]);

        return redirect()->route('periksakesehatan.index')->with('success', 'Data successfully updated');
    }

    public function destroy(Periksakesehatan $periksakesehatan)
    {
        $periksakesehatan->delete();
        return redirect()->route('periksakesehatan.index')->with('success', 'Data successfully deleted');
    }

    public function lihat($id)
    {
        $periksa = Periksakesehatan::find($id);

        $details = DB::table('detailperiksas')->where('id_periksa', $id)->orderBy('detailperiksas.id', 'desc')->get();

        return view('pages.periksas.lihat', compact('periksa','details'));
    }

    public function storehasilperiksa(Request $request)
    {
        Detailperiksa::create([
            'id_periksa' => $request->id_periksa,
            'nama_ternak' => $request->nama_ternak,
            'nomor' => $request->nomor,
            'berat' => $request->berat,
            'umur' => $request->umur,
            'hasil_pemeriksaan' => $request->hasil_pemeriksaan
        ]);

        return redirect("periksakesehatan/$request->id_periksa/lihat")->with('success', 'Data successfully created');
    }

    public function destroydetail($id)
    {
        DB::table('detailperiksas')->where('id', $id)->delete();
        return redirect()->route('periksakesehatan.index')->with('success', 'Data successfully deleted');
    }

    public function editdetail($id)
    {
        $detail = Detailperiksa::find($id);

        return view('pages.periksas.editdetail', compact('detail'));
    }

    public function updatedetailperiksa(Request $request)
    {
        $id = $request->id;
        DB::table('detailperiksas')->where('id',$id)->update([
            'id_periksa' => $request->id_periksa,
            'nama_ternak' => $request->nama_ternak,
            'nomor' => $request->nomor,
            'berat' => $request->berat,
            'umur' => $request->umur,
            'hasil_pemeriksaan' => $request->hasil_pemeriksaan
		]);

        return redirect("periksakesehatan/$request->id_periksa/lihat")->with('success', 'Update Data successfully created');
    }

    public function lihatpdf($id)
    {
        $details = DB::table('detailperiksas')->where('id_periksa', $id)->orderBy('detailperiksas.id', 'desc')->get();

        $tim = Periksakesehatan::find($id);

        $peternak = User::find($tim->id_peserta);

        $pdf = PDF::loadView('baperiksapdf', compact('details','tim','peternak'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('baperiksapdf.pdf');
    }

}
