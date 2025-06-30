<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutWabagDDA()
    {

        return view('home.about.about-wabag-dda');
    }

    public function mpsMessage()
    {
        return view('home.about.mps-message');
    }

    public function ceosMessage()
    {
        return view('home.about.ceos-message');
    }

    public function missionVision()
    {
        return view('home.about.mission-vision');
    }

    public function orgStructure()
    {
        return view('home.about.org-structure');
    }
}
