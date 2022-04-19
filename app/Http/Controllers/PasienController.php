<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::where('akun_id', Session::get('akun_id'))->first();
        $id = $data->$pasien_id;
        return view('product.form', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "profile_pasien/$id",
            'data' => Pasien::find($id)
            ]);            
    }

    public function update(Request $request, $id)
    {
        $ksr = Pasien::find($id);
        $ksr->nama = $request->nama;
        $ksr->nomor_induk = $request->date_employee;
        $ksr->nomor_induk = $request->nomor_induk;
        $ksr->tgl_lahir = $request->tgl_lahir;
        $ksr->alamat_tinggal = $request->alamat_tinggal;
        $ksr->email = $request->email;
        $ksr->nomor_hp = $request->nomor_hp;
        $ksr->save();
        return redirect('profile_pasien')->with('msg', 'Edit berhasil');
    }
}
