<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }
    
    public function store(Request $request)
    {
        $fdb = new Feedback;
        $fdb->feedback = $request->feedback;
        $prod->save();
        return redirect('/feedback')->with('msg', 'Feedback berhasil ditambahkan!');
    }
}
