<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\mail;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use App\Models\Lead;

class MailController extends Controller
{
    //funzione che restituisce la view di contacts
    public function createContactForm(){
        return view('guests.contact');
    }

    public function contactFormHandler(Request $request){
        $data = $request->all();
        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();

        Mail::to('account@mail.it')->send(new SendNewMail($newLead));

        return redirect()->route('guests.thanks')->with("lead", $newLead->name);

    }

    //funzione che restiruisce la view di thanks
    public function ContactFormEnder(){
        return view ('guests.thanks');
    }
}
