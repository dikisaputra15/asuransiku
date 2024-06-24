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
}
