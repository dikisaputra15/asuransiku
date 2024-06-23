<?php

namespace App\Http\Controllers;

use App\Models\Suratpengantar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuratpengantarController extends Controller
{
    public function index(Request $request)
    {
        $surats = DB::table('suratpengantars')
            ->join('users', 'users.id', '=', 'suratpengantars.id_user')
            ->select('suratpengantars.*', 'users.name')
            ->orderBy('suratpengantars.id', 'desc')
            ->get();
        return view('pages.surats.index', compact('surats'));
    }

    public function create()
    {
        return view('pages.surats.create');
    }

    public function store(Request $request)
    {
        Suratpengantar::create([
            'id_user' => $request->id_user,
            'kepala_surat' => $request->kepala_surat,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'tujuan' => $request->tujuan,
            'nama_surat' => $request->nama_surat,
            'nomor' => $request->nomor,
            'jenis_surat' => $request->jenis_surat,
            'volume' => $request->volume,
            'keterangan' => $request->keterangan,
            'nama_ketua_klp_tani' => $request->nama_ketua_klp_tani
        ]);

        return redirect()->route('suratpengantar.index')->with('success', 'Surat successfully created');
    }

    public function destroy(Suratpengantar $suratpengantar)
    {
        $suratpengantar->delete();
        return redirect()->route('suratpengantar.index')->with('success', 'Surat successfully deleted');
    }

    public function edit($id)
    {
        $suratpengantar = \App\Models\Suratpengantar::findOrFail($id);
        return view('pages.surats.edit', compact('suratpengantar'));
    }

    public function update(Request $request, $id)
    {
        DB::table('suratpengantars')->where('id',$id)->update([
            'id_user' => $request->id_user,
            'kepala_surat' => $request->kepala_surat,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'tujuan' => $request->tujuan,
            'nama_surat' => $request->nama_surat,
            'nomor' => $request->nomor,
            'jenis_surat' => $request->jenis_surat,
            'volume' => $request->volume,
            'keterangan' => $request->keterangan,
            'nama_ketua_klp_tani' => $request->nama_ketua_klp_tani
        ]);

        return redirect()->route('suratpengantar.index')->with('success', 'Surat successfully updated');
    }
}
