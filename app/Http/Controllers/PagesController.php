<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $cars=Car::all();
        return view ('welcome', compact('cars'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
