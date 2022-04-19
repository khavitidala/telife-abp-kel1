<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Konselor;
use App\Models\Pasien;

class AdminController extends Controller
{
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda belum login, silahkan login terlebih dahulu');
        } else {
            if(Session::get('is_admin')) {
                $pasien = Pasien::get();
                $konselor = Konselor::get();
                return view('admin', ['pasien' => $pasien, 'konselor' => $konselor]);
            } else {
                return redirect('login')->with('alert','Akses hanya diperuntukkan untuk admin!');
            }
        }      
    }

    public function create_konselor()
    {
        return view('create_konselor', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => "profile_konselor"
            ]);            
    }

    public function store_konselor(Request $request)
    {
        $ksr = new Konselor;
        $ksr->akun_id = $request->akun_id; 
        $ksr->nama = $request->nama;
        $ksr->date_employee = $request->date_employee;
        $ksr->nomor_induk = $request->nomor_induk;
        $ksr->tipe = $request->tipe;
        $ksr->save();
        return redirect('admin')->with('msg', 'Tambah konselor berhasil');
    }

    public function create_pasien()
    {
        return view('create_pasien', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => "profile_pasien",
            ]);            
    }

    public function store_pasien(Request $request, $id)
    {
        $ksr = new Pasien;
        $ksr->akun_id = $request->akun_id; 
        $ksr->nama = $request->nama;
        $ksr->nomor_induk = $request->nomor_induk;
        $ksr->tgl_lahir = $request->tgl_lahir;
        $ksr->alamat_tinggal = $request->alamat_tinggal;
        $ksr->email = $request->email;
        $ksr->nomor_hp = $request->nomor_hp;
        $ksr->save();
        return redirect('admin')->with('msg', 'Tambah Pasien berhasil');
    }

    public function destroy_pasien($id)
    {
        $pas = Pasien::where('pasien_id', '=', $id)->first();
        Pasien::destroy($pas);
        return redirect('admin')->with('msg', 'Hapus berhasil');
    }

    public function destroy_konselor($id)
    {
        $pas = Konselor::where('konselor_id', '=', $id)->first();
        Konselor::destroy($pas);
        return redirect('admin')->with('msg', 'Hapus berhasil');
    }
}
