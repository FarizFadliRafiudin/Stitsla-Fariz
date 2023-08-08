<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaC extends Controller
{
    Public function index() {
        return view('pages.peserta');
       }
}