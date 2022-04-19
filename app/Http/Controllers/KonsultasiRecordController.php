<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\KonsultasiRecord;

class KonsultasiRecordController extends Controller
{
    public function store(Request $request)
    {
        $data = Konselor::where('akun_id', Session::get('akun_id'))->first();
        $kr = new KonsultasiRecord;
        $kr->konselor_id = $data->$konselor_id; # ambil dari session
        $kr->nomor_induk_pasien = $request->nomor_induk_pasien;
        $kr->diagnosa = $request->diagnosa;
        $kr->treatment = $request->treatment;
        $prod->save();
        return redirect('/konsultasi')->with('msg', 'Konsultasi berhasil ditambahkan!');
    }
}
