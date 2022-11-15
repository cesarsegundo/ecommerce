<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function show()
    {
        return view('mail.show');
    }
    public function submit(Request $request)
    {
        Mail::to('cesarsegundolorenzo@gmail.com')->send(new ContactMail($request->name, $request->email, $request->message));
        return redirect('/contacto');
    }
}
