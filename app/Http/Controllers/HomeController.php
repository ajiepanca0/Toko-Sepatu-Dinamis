<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Testimonial;



class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        $services = Service::all();
        $testimonials = Testimonial::all();

        return view('welcome',compact(
            'sliders', 'services','testimonials'
        ));
    }

    public function addtochart(Slider $slider)
    {
       dd('haha');
    }

   
}
