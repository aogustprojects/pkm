<?php

namespace App\Http\Controllers;

use App\Mail\welcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendWelcomeEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'emailMessage' => 'required|string',  // ensure this is a string
        ]);
    

        Mail::to('uptd.pkm.pasirjati@gmail.com')->send(new WelcomeEmail($validated));

        $title = "Kontak - Email Terkirim";

        return redirect()->back()->with('success', 'Email Terkirim!')->with('title', $title);
    }
}
