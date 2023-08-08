<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardC extends Controller
{
   Public function index() {
    return view('pages.dashboard');
   }
}