<?php

namespace App\Listeners;

use App\Events\UserRegistedEvent;
use App\Models\UserModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendUserRegistedNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $user;
    public function __construct(UserModel $user)
    {
        $this->user=$user;
    }

    /**
     * Handle the event.
     *
     * @param  SendUserRegistedNotification  $event
     * @return void
     */
    public function handle(UserRegistedEvent $event)
    {
       
    }
    public function failed(UserRegistedEvent $event, $exception)
    {
        //
    }
}
