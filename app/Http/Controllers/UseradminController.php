<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UseradminController extends Controller
{
    public function index(){
        $users = User::where('usertype','user')->get();
        return view('useradmin.index',compact('users'));
    }
}
