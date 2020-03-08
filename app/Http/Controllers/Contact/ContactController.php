<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   function index(){

       return view(request()->segment(1).'.contact.contact');
   }

    function store(ContactFormRequest $formRequest){
       Mail::to('test@test.com')->send(new ContactEmail($formRequest));
    }
}
