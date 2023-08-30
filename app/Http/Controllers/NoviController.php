<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoviController extends Controller
{
   public function index()
   {
       $about = "Ovo je sadržaj About stranice.";
       return view('aboutus', compact('about'));
   }
}
