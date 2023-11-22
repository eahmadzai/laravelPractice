<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        return view('front.sesrvice.index');
    }
}
