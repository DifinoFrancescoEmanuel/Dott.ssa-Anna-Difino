<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homePage()
    {
        return view('page.welcome');
    }

    public function aboutMe()
    {
        return view('page.aboutMe');
    }
    public function PsyanMusic()
    {
        return view('page.PsyanMusic');
    }
    public function Fortheschool()
    {
        return view('page.Fortheschool');
    }
    public function advice()
    {
        return view('page.advice');
    }
    public function cognitive()
    {
        return view('page.cognitive');
    }
}
