<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Akun;

class AkunController extends Controller
{
    public function beranda() {
        return view('beranda');
    }

    public function feedback() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }

    public function profile() {
        return view('profile');
    }

    public function chat() {
        return view('chat');
    }

    public function faq() {
        return view('faq');
    }

    public function register() {
        return view('register');
    }

    public function index(){
        
        return view('login');
        // return view('login', [
        //     'title' => 'Login',
        //     'method' => 'POST',
        //     'action' => "loginpost"
        //     ]);
    }

    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = Akun::where('username','=',$username)->first();
        if($data){ 
            if(strcmp($password,$data->password)==0){
                Session::put('akun_id',$data->akun_id);
                Session::put('is_konselor',$data->is_konselor);
                Session::put('is_admin',$data->is_admin);
                Session::put('login',TRUE);
                if($data->is_konselor){
                    return redirect('profile_konselor');
                } else if($data->is_admin){
                    return redirect('admin');
                } else {
                    return redirect('profile_pasien');
                }
                return redirect('admin');
                
        } else {
                return redirect('login')->with('alert','Email atau Password anda salah!');
            }
        } else {
            return redirect('login')->with('alert','Email atau Password anda salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Anda telah logout');
    }
}
