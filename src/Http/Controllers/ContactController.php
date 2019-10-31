<?php


namespace Fouzo09\Contact\Http\Controllers;


use App\Http\Controllers\Controller;
use Fouzo09\Contact\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends  Controller
{
    public function index(){
        return view("contact::contact");
    }

    public function send(Request $request)
    {
        $nom_complet = $request->nom;
        $email       = $request->email;
        $message     = $request->message;

        Mail::to(config(['email_to_send']))->send(new SendMail($message));
        return back();
    }
}
