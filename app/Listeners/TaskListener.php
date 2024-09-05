<?php

namespace App\Listeners;

use App\Events\TaskCreation;
use App\Mail\TaskCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class TaskListener{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TaskCreation $event): void
    {
        Mail::to('wahid@gmail.com')->send(new TaskCreated($event->task));
    }
}
