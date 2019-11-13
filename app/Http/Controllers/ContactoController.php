<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Requests\CraetMessageRequest;

class ContactoController extends Controller
{
    public function index()
    {
        return view('perfumeria.contacto.index');
    }


    public function message(CraetMessageRequest $request)
    {
        Message::create($request->all());

        return back()->with('info', 'Tu mensaje a sido enviado correctamente:');
    }
}
