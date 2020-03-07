<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   function index(){

       return view(request()->segment(1).'.contact.contact');
   }

    function store(){

    }
}
