<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Provide;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        $sliders = Slider::all();
        $contact = Contact::first();
        $provide = Provide::first();
        $testimonials = Testimonial::all();
        return view('front.home.index', compact('sliders', 'contact', 'services', 'provide', 'testimonials'));
    }
}
