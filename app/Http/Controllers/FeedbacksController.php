<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbacks;

class FeedbacksController extends Controller
{
    public function store_feedback(Request $request)
    {
        error_log("tes");
        $fdb = new Feedbacks;
        $fdb->feedback = $request->feedback;
        $fdb->save();
        return redirect('/contact')->with('msg', 'Feedback berhasil ditambahkan!');
    }
}
