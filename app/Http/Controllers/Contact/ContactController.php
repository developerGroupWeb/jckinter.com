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

       if($formRequest->ajax()){

           ($this->send_contact_email($formRequest));

           return response()->json(['success' => true, 'message' => 'Your message has been send'], 200);
       }

       $this->send_contact_email($formRequest);
       return redirect()->route('home.index')->with('success', 'Your message has been send');
    }

    protected function send_contact_email($formRequest)
    {
        Mail::to('help@jckinter.com')
            ->send(new ContactEmail($formRequest));
    }
}
