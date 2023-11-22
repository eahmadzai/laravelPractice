<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    //
    public function index()
    {
        return view('cms.finance.index');
    }
}
