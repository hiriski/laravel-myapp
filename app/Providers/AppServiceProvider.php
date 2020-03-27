<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use App;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {

        /**
         * Register custom helper
         */
        foreach (glob(app_path('Helpers/*.php')) as $filename) {
            require_once $filename;
        }
        
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
            $hours      = (int)Carbon::parse(Carbon::now())->format('H');
            $locale     = App::getLocale();
            $message    = NULL;
            if($hours >= 3 && $hours < 10) {
                if($locale == 'vn') {
                    $message = 'Chào Buổi sáng';
                }
                else if($locale == 'id') {
                    $message = 'Selamat Pagi';
                }
                else {
                    $message = 'Good Morning';
                }
            }
            else if($hours > 10 && $hours <= 17) {
                if($locale == 'vn') {
                    $message = 'Chào Buổi chiều';
                }
                else if($locale == 'id') {
                    $message = 'Selamat Siang';
                }
                else {
                    $message = 'Good Afternoon';
                }
            }
            else {
                if($locale == 'vn') {
                    $message = 'Chào Buổi tối';
                }
                else if($locale == 'id') {
                    $message = 'Selamat Malam';
                }
                else {
                    $message = 'Good Evening';
                }
            }
            return $message;
        });
    }
}