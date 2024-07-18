<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Suratpengantar;
use App\Models\Pesertaasuransi;
use App\Models\Periksakesehatan;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $diproses = Pesertaasuransi::where('status', 'diproses')->count();
        $diterima = Pesertaasuransi::where('status', 'diterima')->count();
        $ditolak = Pesertaasuransi::where('status', 'ditolak')->count();
       
        return view('pages.dashboard', compact('diproses','diterima','ditolak'));
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
}
