<?php

namespace App\Http\Controllers;

use App\Models\Pesertaasuransi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PesertaasuransiController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        if(auth()->user()->roles == 'kepala'){
            $pesertas = DB::table('pesertaasuransis')
            ->join('users', 'users.id', '=', 'pesertaasuransis.id_user')
            ->select('pesertaasuransis.*', 'users.name')
            ->orderBy('pesertaasuransis.id', 'desc')
            ->get();
        }else{
            $pesertas = DB::table('pesertaasuransis')
                ->join('users', 'users.id', '=', 'pesertaasuransis.id_user')
                ->select('pesertaasuransis.*', 'users.name')
                ->where('pesertaasuransis.id_user', $id)
                ->orderBy('pesertaasuransis.id', 'desc')
                ->get();
        }
        return view('pages.pesertas.index', compact('pesertas'));
    }

    public function create()
    {
        return view('pages.pesertas.create');
    }

    public function store(Request $request)
    {
        $file1 = $request->file('ktp');
        $file2 = $request->file('foto');
        $file3 = $request->file('surat');
        $extension1 = $file1->getClientOriginalExtension();
        $extension2 = $file2->getClientOriginalExtension();
        $extension3 = $file3->getClientOriginalExtension();

        $num = hexdec(uniqid());
        $filename1 = $num.'.'.$extension1;
        $filename2 = $num.'.'.$extension2;
        $filename3 = $num.'.'.$extension3;

        Storage::putFileAs('public/filektp', $file1, $filename1);
        Storage::putFileAs('public/filefoto', $file2, $filename2);
        Storage::putFileAs('public/filesurat', $file3, $filename3);

        Pesertaasuransi::create([
            'id_user' => $request->id_user,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'no_hp' => $request->no_hp,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten_kota' => $request->kabupaten_kota,
            'jenis_ternak' => $request->jenis_ternak,
            'jumlah_ternak' => $request->jumlah_ternak,
            'keterangan' => 'pengajuan',
            'ktp' => $filename1,
            'foto_ternak' => $filename2,
            'surat_pengantar' => $filename3
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
        $cekfile1 = $request->ktp;
        $old_file1 = $request->old_file1;
        $file1 = $request->file('ktp');

        $cekfile2 = $request->foto_ternak;
        $old_file2 = $request->old_file1;
        $file2 = $request->file('foto_ternak');

        $cekfile3 = $request->surat_pengantar;
        $old_file3 = $request->old_file3;
        $file3 = $request->file('surat_pengantar');

        if($cekfile1 != "" or $cekfile2 != "" or $cekfile3 != ""){
            $filedel1 = Storage::url('filektp/'. $old_file1);
            $filedel2 = Storage::url('filefoto/'. $old_file2);
            $filedel3 = Storage::url('filesurat/'. $old_file3);

            if(File::exists($filedel1)) {
                File::delete($filedel1);
            }

            if(File::exists($filedel2)) {
                File::delete($filedel2);
            }

            if(File::exists($filedel3)) {
                File::delete($filedel3);
            }

            $extension1 = $file1->getClientOriginalExtension();
            $extension2 = $file2->getClientOriginalExtension();
            $extension3 = $file3->getClientOriginalExtension();

            $num = hexdec(uniqid());

            $filename1 = $num.'.'.$extension;
            $filename2 = $num.'.'.$extension2;
            $filename3 = $num.'.'.$extension3;

            Storage::putFileAs('public/filektp', $file1, $filename1);
            Storage::putFileAs('public/filefoto', $file2, $filename2);
            Storage::putFileAs('public/filesurat', $file3, $filename3);

            DB::table('pesertaasuransis')->where('id',$id)->update([
                'id_user' => $request->id_user,
                'tgl_pengajuan' => $request->tgl_pengajuan,
                'no_hp' => $request->no_hp,
                'desa' => $request->desa,
                'kecamatan' => $request->kecamatan,
                'kabupaten_kota' => $request->kabupaten_kota,
                'jenis_ternak' => $request->jenis_ternak,
                'jumlah_ternak' => $request->jumlah_ternak,
                'keterangan' => 'pengajuan',
                'ktp' => $filename1,
                'foto_ternak' => $filename2,
                'surat_pengantar' => $filename3
            ]);
        }else{
            DB::table('pesertaasuransis')->where('id',$id)->update([
                'id_user' => $request->id_user,
                'tgl_pengajuan' => $request->tgl_pengajuan,
                'no_hp' => $request->no_hp,
                'desa' => $request->desa,
                'kecamatan' => $request->kecamatan,
                'kabupaten_kota' => $request->kabupaten_kota,
                'jenis_ternak' => $request->jenis_ternak,
                'jumlah_ternak' => $request->jumlah_ternak,
                'keterangan' => 'pengajuan'
            ]);
        }

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

    public function terima($id)
    {
        DB::table('pesertaasuransis')->where('id',$id)->update([
            'keterangan' => 'diterima'
        ]);

        return redirect('/pesertaasuransi')->with('alert-primary','permohonan diterima');
    }

    public function tolak($id)
    {
        DB::table('pesertaasuransis')->where('id',$id)->update([
            'keterangan' => 'ditolak'
        ]);

        return redirect('/pesertaasuransi')->with('alert-danger','permohonan ditolak');
    }
}
