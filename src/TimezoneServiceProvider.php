<?php

namespace CmdrTpir\Timezone;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('APP_TIMEZONE') !== null && config('app.timezone', 'UTC') === 'UTC') {
            config(['app.timezone' => env('APP_TIMEZONE')]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
