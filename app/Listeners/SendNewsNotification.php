<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Events\NewsCreated;
use App\Mail\NewNewsNotificationMail;
use App\Models\Subscribers;
use Illuminate\Support\Facades\Mail;
use App\Models\News;


class SendNewsNotification
{
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
    public function handle(NewsCreated $event)
    {
        $subscribers = Subscribers::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->queue(new NewNewsNotificationMail($event->news));
            // Mail::to($subscriber->email)->send(new NewNewsNotificationMail($event->news));
        }
    }
}
