<?php

namespace App\Http\Controllers;

use Mail;
use App\Message;
use Illuminate\Http\Request;
use App\Providers\MessageWasReceived;
use App\Http\Requests\CraetMessageRequest;

class ContactoController extends Controller
{
    public function index()
    {
        return view('perfumeria.contacto.index');
    }


    public function message(CraetMessageRequest $request)
    {
        $message = Message::create($request->all());


        event(new MessageWasReceived($message));


        //Metodo para enviar mensajes a correos de gmail 
        // Mail::send('mails.contact', ['msg' => $message], function ($m) use ($message) {

        //     $m->to($message->email, $message->nombre)->subject('Tu mensaje fue recibido');
        // });


        return back()->with('info', 'Tu mensaje a sido enviado correctamente:');
    }
}
