<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        // dd('hii');
        return view('admin.dashboard');
    }
}
