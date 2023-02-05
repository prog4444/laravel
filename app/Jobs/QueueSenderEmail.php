<?php

namespace App\Jobs;

use App\Http\Controllers\SendMailController;
use App\Mail\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class QueueSenderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $mess;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mess)
    {
        $this->mess = $mess;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $toEmail = "prog90003@gmail.com";
        $mm = new SendEmail($this->mess);
        Mail::to($toEmail)->send($mm);
    }
}
