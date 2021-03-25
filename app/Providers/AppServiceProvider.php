<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Testimoni;
use Illuminate\Support\Facades\View;

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
        $testimoni = Testimoni::orderBy('created_at', 'desc')->get();
        View::share('testimoni', $testimoni);
    }
}
