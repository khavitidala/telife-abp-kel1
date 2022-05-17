<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\KonsultasiRecord;
use App\Models\Pasien;
use App\Models\Konselor;

class KonsultasiRecordController extends Controller
{
    public function index() {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda belum login, silahkan login terlebih dahulu');
        } else {
            if(Session::get('is_konselor')) {
                $data = Konselor::where('akun_id', Session::get('akun_id'))->first();
                $record = KonsultasiRecord::where('konselor_id', $data->konselor_id)->get();
                return view('consulRecord', ['record' => $record]);
            } else if(Session::get('is_admin')) {
                return redirect('admin');
            } else {
                $data = Pasien::where('akun_id', Session::get('akun_id'))->first();
                $record = KonsultasiRecord::where('nomor_induk_pasien', $data->nomor_induk)->get();
                return view('consulRecord', ['record' => $record]);
            }
        }
    }

    public function store(Request $request)
    {
        $data = Konselor::where('akun_id', Session::get('akun_id'))->first();
        $kr = new KonsultasiRecord;
        $kr->konselor_id = $data->konselor_id; # ambil dari session
        $kr->nomor_induk_pasien = $request->nomor_induk_pasien;
        $kr->diagnosa = $request->diagnosa;
        $kr->treatment = $request->treatment;
        $kr->save();
        return redirect('/consulRecord')->with('msg', 'Konsultasi berhasil ditambahkan!');
    }
}
