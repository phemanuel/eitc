<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        return view('components.index');
    }

    public function about()
    {
        return view('components.company.about');
    }

    public function process()
    {
        return view('components.company.process');
    }

    public function career()
    {
        return view('components.company.career');
    }

    public function services()
    {
        return view('components.services.services');
    }

    public function solutions()
    {
        return view('components.solutions.solutions');
    }

    public function contact()
    {
        return view('components.contact.contact');
    }
}
