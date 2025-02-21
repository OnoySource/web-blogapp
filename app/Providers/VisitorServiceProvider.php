<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Visitor;
use View;

class VisitorServiceProvider extends ServiceProvider
{
    public function boot(): void {
        $this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\TrackVisitors::class);
        View::share('visitorCount',Visitor::count());
    }

    public function register(): void
    {
        //
    }

  
    
}
