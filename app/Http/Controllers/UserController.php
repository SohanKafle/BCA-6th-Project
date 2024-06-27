<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function profile()
    {
        return view('users.profile');
    }
    public function about()
    {
        return view('users.about');
    }
    public function contact()
    {
        return view('users.contact');
    }
    public function services()
    {
        return view('users.services');
    }
    

}
