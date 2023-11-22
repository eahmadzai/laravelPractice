<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        $sliders = Slider::all();
        $contact = Contact::first();
        return view('front.home.index', compact('sliders', 'contact', 'services'));
    }
}
