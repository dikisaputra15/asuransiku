<?php

namespace App\Http\Controllers;

use App\Models\Pesertaasuransi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PesertaasuransiController extends Controller
{
    public function index(Request $request)
    {
        $pesertas = DB::table('pesertaasuransis')
            ->join('users', 'users.id', '=', 'pesertaasuransis.id_user')
            ->select('pesertaasuransis.*', 'users.name')
            ->orderBy('pesertaasuransis.id', 'desc')
            ->get();
        return view('pages.pesertas.index', compact('pesertas'));
    }

    public function create()
    {
        return view('pages.pesertas.create');
    }

    public function store(Request $request)
    {
        Pesertaasuransi::create([
            'id_user' => $request->id_user,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'nama_peternak' => $request->nama_peternak,
            'no_hp' => $request->no_hp,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten_kota' => $request->kabupaten_kota,
            'jenis_ternak' => $request->jenis_ternak,
            'jumlah_hewan_ternak' => $request->jumlah_hewan_ternak,
            'harga' => $request->harga,
            'status' => 'diproses',
            'keterangan' => 'diperiksa'
        ]);

        return redirect()->route('pesertaasuransi.index')->with('success', 'Peserta successfully created');
    }

    public function edit($id)
    {
        $pesertaasuransi = \App\Models\Pesertaasuransi::findOrFail($id);
        return view('pages.pesertas.edit', compact('pesertaasuransi'));
    }

    public function update(Request $request, $id)
    {
        DB::table('pesertaasuransis')->where('id',$id)->update([
            'id_user' => $request->id_user,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'nama_peternak' => $request->nama_peternak,
            'no_hp' => $request->no_hp,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten_kota' => $request->kabupaten_kota,
            'jenis_ternak' => $request->jenis_ternak,
            'jumlah_hewan_ternak' => $request->jumlah_hewan_ternak,
            'harga' => $request->harga,
            'status' => 'diproses',
            'keterangan' => 'diperiksa'
        ]);

        return redirect()->route('pesertaasuransi.index')->with('success', 'Peserta successfully updated');
    }

    public function destroy(Pesertaasuransi $pesertaasuransi)
    {
        $pesertaasuransi->delete();
        return redirect()->route('pesertaasuransi.index')->with('success', 'Peserta successfully deleted');
    }

    public function updatepengajuan($id)
    {
        $pesertaasuransi = \App\Models\Pesertaasuransi::findOrFail($id);
        return view('pages.pesertas.updatepengajuan', compact('pesertaasuransi'));
    }

    public function prosespengajuan(Request $request)
    {
        $id_peserta = $request->id_peserta;

        DB::table('pesertaasuransis')->where('id',$id_peserta)->update([
            'status' => $request->status,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/pesertaasuransi')->with('alert-primary','proses di update');
    }
}
