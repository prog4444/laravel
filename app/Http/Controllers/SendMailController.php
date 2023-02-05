<?php

namespace App\Http\Controllers;

use App\Jobs\QueueSenderEmail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{

    public function send($message) {
        $qs = new QueueSenderEmail($message);
        $this->dispatch($qs);
        $qs = (new QueueSenderEmail($message))->delay(now()->addMinutes(10));
        $this->dispatch($qs);

        return redirect()
            ->back()
            ->with('mess', "Сообщение $message отправлено");
    }
}
