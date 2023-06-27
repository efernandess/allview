<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Patient;
use App\Observers\PatientObserver;
use App\Models\Record;
use App\Observers\RecordObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Patient::observe(PatientObserver::class);
        Record::observe(RecordObserver::class);
    }
}
