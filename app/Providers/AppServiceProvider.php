<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // directive to check if signed in user is Admin
        Blade::directive('admin', function () {
            $condition = false;

            if (Auth::check()) {
                $condition = Auth::user()->admin;
            }

            return "<?php if ($condition) { ?>";
        });

        Blade::directive('endadmin', function () {
            return "<?php } ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
