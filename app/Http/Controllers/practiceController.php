<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practiceController extends Controller
{
    public function index()
    {
        return view('practices.index');
    }
  
}
