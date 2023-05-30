<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function sendmail(Request $request)
    {

        Mail::to('contact@ltchost.com')->send(new ContactMail($request->name,$request->email,$request->message));

        return back()->with('success', 'Merçi! Votre message a bien été envoyé.');

    }

}
