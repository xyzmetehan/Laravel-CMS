<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function pricing()
    {
        return view('front.pricing');
    }
    public function faq()
    {
        return view('front.faq');
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function portfolio()
    {
        return view('front.portfolio');
    }
}
