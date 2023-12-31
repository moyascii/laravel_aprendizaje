<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        //Agregar reglas
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => 'Necesito que digites el nombre'
        ]);

        //Enviaremos un mail
        Mail::to('cristian.moya13@inacapmail.cl')->queue(new MessageReceived($message));

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
