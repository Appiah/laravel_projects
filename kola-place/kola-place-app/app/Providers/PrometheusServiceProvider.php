<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Spatie\Prometheus\Facades\Prometheus;
use Spatie\Prometheus\Collectors\Horizon\RecentJobsCollector;
use Spatie\Prometheus\Collectors\Horizon\HorizonStatusCollector;
use Spatie\Prometheus\Collectors\Horizon\JobsPerMinuteCollector;
use Spatie\Prometheus\Collectors\Horizon\CurrentWorkloadCollector;
use Spatie\Prometheus\Collectors\Horizon\FailedJobsPerHourCollector;
use Spatie\Prometheus\Collectors\Horizon\CurrentMasterSupervisorCollector;
use Spatie\Prometheus\Collectors\Horizon\CurrentProcessesPerQueueCollector;

class PrometheusServiceProvider extends ServiceProvider
{
    public function register()
    {
        /*
         * Here you can register all the exporters that you
         * want to export to prometheus
         */
        //Prometheus::addGauge('My gauge')->value(function(){return 123.45;}); //this is added by default

        Prometheus::addGauge('User count')
            ->helpText(' : This is the number of users in our app')
            ->value(fn() => User::count());

        /*Prometheus::addGauge('User count')
        ->label('status')
        ->value(function() {
            return [
                [User::where('status', 'active')->count(), ['active']],
                [User::where('status', 'inactive')->count(), ['inactive']],
            ];
        });*/


        /*
        Prometheus::addGauge(
            name: 'User count',
            helpText: 'This is the number of users in our app',
            namespace: 'My custom namespace',
            labels: ['status'],
            value: function() {
                return [
                    [User::where('status', 'active')->count(), ['active']],
                    [User::where('status', 'inactive')->count(), ['inactive']],
                ];
            }
        );
        */
        

        /*
         * Uncomment this line if you want to export
         * all Horizon metrics to prometheus
         */
        //$this->registerHorizonCollectors();
    }

    public function registerHorizonCollectors(): self
    {
        Prometheus::registerCollectorClasses([
            CurrentMasterSupervisorCollector::class,
            CurrentProcessesPerQueueCollector::class,
            CurrentWorkloadCollector::class,
            FailedJobsPerHourCollector::class,
            HorizonStatusCollector::class,
            JobsPerMinuteCollector::class,
            RecentJobsCollector::class,
        ]);

        return $this;
    }
}
