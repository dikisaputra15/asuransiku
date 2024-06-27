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
        $SuratCount = Suratpengantar::count();
        $PesertaCount = Pesertaasuransi::count();
        $PeriksaCount = Periksakesehatan::count();
        return view('pages.dashboard', compact('SuratCount','PesertaCount','PeriksaCount'));
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
}
