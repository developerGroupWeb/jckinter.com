<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\HelpContactFormRequest;
use App\Mail\HelpContactEmail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HelpContactController extends Controller
{

    function index(){

        return redirect()->route('dashboard.index', strtolower(Session::get('currency_user')['full_name']));
    }
    /**
     * @param HelpContactFormRequest $formRequest
     * @return RedirectResponse
     */
    function store(HelpContactFormRequest $formRequest){

        $user = User::findOrFail(Session::get('currency_user')['id']);

        if($formRequest->ajax()){


            ($this->send_help_contact_email($formRequest, $user));

            return response()->json(['success' => true, 'message' => 'Your message has been send'], 200);
        }

        ($this->send_help_contact_email($formRequest, $user));

        return back()->with('success', 'Your message has been send');

    }

    protected function send_help_contact_email($formRequest, $user)
    {
        Mail::to('jckinter@contact.com')
            ->send(new HelpContactEmail($formRequest, $user));
    }
}
