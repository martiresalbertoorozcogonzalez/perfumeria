<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();


        return view('admin.mensajes.index', compact('messages'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $messages = Message::findOrFail($request->message_id);

        $messages->delete();

        return back();
    }
}
