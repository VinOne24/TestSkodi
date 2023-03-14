<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkodiController extends Controller
{
    public function kelas(){
        return view('kelas');
    }

    public function dass(){
        return view('dass');
    }
    public function event(){
        return view('event');
    }

    public function tentang(){
        return view('tentang');
    }


}
