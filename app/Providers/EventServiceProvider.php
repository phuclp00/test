<?php

namespace App\Providers;

use App\Events\NotificationEvent;
use App\Events\UserRegistedEvent;
use App\Listeners\SendPodcastNotification;
use App\Listeners\SendUserRegistedNotification;
use App\Models\UserDetail;
use App\Models\UserModel;
use App\Notifications\UserRegisted;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NotificationEvent::class => [
           // SendEmailVerificationNotification::class,
            //UserModel::class,
            //SendPodcastNotification::class,
            //UserRegisted::class,
            SendPodcastNotification::class,
        ],
        UserRegistedEvent::class =>[
            SendUserRegistedNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {        
        parent::boot();
        //
    }
}
