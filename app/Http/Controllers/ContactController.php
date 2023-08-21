<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContacRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function __invoke(ContacRequest $request)
    {
        Mail::to('ahmaharis6@gmail.com')->send(new ContactMail($request->name, $request->email, $request->body));
        return Redirect::back();
    }
}
