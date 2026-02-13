<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('welcome');
    }
    public function profile(){
        return view('profile');
    }

}
