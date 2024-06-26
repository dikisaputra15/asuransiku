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
        $pesertas = DB::table('pesertaasuransis')->orderBy('pesertaasuransis.id', 'desc')->get();
        return view('pages.periksas.index', compact('pesertas'));
    }
}
