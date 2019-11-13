<?php

namespace App\Providers;

use App\Providers\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendNotificationToTheOwner
{
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {

        // var_dump('Notificar al dueno');


        $message = $event->message;

        Mail::send('mails.contactovner', ['msg' => $message], function ($m) use ($message) {

            $m->from($message->email, $message->nombre)
                ->to('perfuventasgt@gmail.com', 'PerfuVentas')
                ->subject('Has recibido un mensaje del suiente usuario');
        });
    }
}
