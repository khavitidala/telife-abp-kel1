<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Konselor;

class KonselorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Konselor::where('akun_id', Session::get('akun_id'))->first();
        $id = $data->$konselor_id;
        return view('profile', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "profile_konselor/$id",
            'data' => Konselor::find($id)
            ]);            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ksr = Konselor::find($id);
        $ksr->nama = $request->nama;
        $ksr->date_employee = $request->date_employee;
        $ksr->nomor_induk = $request->nomor_induk;
        $ksr->tipe = $request->tipe;
        $ksr->save();
        return redirect('profile_konselor')->with('msg', 'Edit berhasil');
    }
}
