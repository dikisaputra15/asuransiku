<?php

namespace App\Http\Controllers;

use App\Models\Periksakesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PeriksakesehatanController extends Controller
{
    public function index(Request $request)
    {
        $periksas = DB::table('periksakesehatans')
        ->join('pesertaasuransis', 'pesertaasuransis.id', '=', 'periksakesehatans.id_peserta')
        ->select('periksakesehatans.*', 'pesertaasuransis.nama_peternak')
        ->orderBy('periksakesehatans.id', 'desc')
        ->get();
        return view('pages.periksas.index', compact('periksas'));
    }

    public function create()
    {
        $pesertas = DB::table('pesertaasuransis')->get();
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
        $pesertas = DB::table('pesertaasuransis')->get();
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
        return view('pages.periksas.lihat', compact('periksa'));
    }
}
