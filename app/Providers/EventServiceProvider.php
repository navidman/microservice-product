<?php

namespace App\Providers;

use App\Jobs\NotificationJob;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \App::bindMethod(NotificationJob::class . '@handle', fn($job) => $job->handle());

    }
}
