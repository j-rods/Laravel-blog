<?php

namespace App\Providers;

use \App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('layouts.sidebar', function ($view) {
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');
            $view->with(compact('archives', 'tags'));
        });
    }

    // Register any application services into the service container
    public function register()
    {  
        // Bind into the container
        // Allows to register any key into the container
        // and then associate that with some value
        $this->app->singleton(Stripe::class, function ($app) {
          // return a new instance of stripe class
          return new Stripe(config('services.stripe.secret')); // pass through a secret key
        });
    }
}
