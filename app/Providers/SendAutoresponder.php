<?php

namespace App\Providers;

use App\Providers\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendAutoresponder
{
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {

        // var_dump('Enviar autorespondedor');

        $message = $event->message;

        Mail::send('mails.contact', ['msg' => $message], function ($m) use ($message) {

            $m->to($message->email, $message->nombre)->subject('Tu mensaje fue recibido');
        });
    }
}
