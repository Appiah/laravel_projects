<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Notifications\DatabaseApproachingMaxConnections;
use Illuminate\Database\Events\DatabaseBusy;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void{
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void{
        
        Event::listen(function (DatabaseBusy $event) {
            Notification::route('mail', 'emap218@gmail.com')
                    ->notify(new DatabaseApproachingMaxConnections(
                        $event->connectionName,
                        $event->connections
                    ));
        });

    }
}
