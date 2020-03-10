<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

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
    public function boot() {
        Schema::defaultStringLength(191);

        /** greeting */
        Blade::directive('greeting', function () {
            $hours = (int)Carbon::parse(Carbon::now())->format('H');
            $message = NULL;
            if($hours >= 3 && $hours < 10) {
                $message = "Good Morning";
            }
            else if($hours > 10 && $hours <= 17) {
                $message = "Good Afternoon";
            }
            else {
                $message = "Good Evening";
            }
            return $message;
        });
    }
}
