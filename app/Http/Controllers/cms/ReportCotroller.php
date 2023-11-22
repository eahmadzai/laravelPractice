<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportCotroller extends Controller
{
    //
    public function index()
    {
        return view('cms.report.index');
    }
}
