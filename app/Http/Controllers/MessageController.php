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
        Mail::to('cristian.moya13@inacapmail.cl')->send(new MessageReceived($message));

        return 'datos validados';
    }
}
