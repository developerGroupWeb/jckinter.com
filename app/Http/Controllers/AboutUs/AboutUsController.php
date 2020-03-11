<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
   function index(){

       return view(request()->segment(1).'.aboutus.about-us');
   }
}
