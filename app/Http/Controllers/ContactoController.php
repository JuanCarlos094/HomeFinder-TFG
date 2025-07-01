<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function show()
    {
        return view('contacto');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::send('emails.contacto', $validated, function ($msg) use ($validated) {
            $msg->to('info@home-finder.com')
                ->subject($validated['subject']);
        });


        return back()->with('success', 'Tu mensaje ha sido enviado con éxito.');
    }
}
