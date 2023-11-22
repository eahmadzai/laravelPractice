<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HrController extends Controller
{
    //
    public function index()
    {
        return view('cms.HR.index');
    }
}
