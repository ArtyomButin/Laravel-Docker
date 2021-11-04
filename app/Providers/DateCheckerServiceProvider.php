<?php

namespace App\Providers;

use App\Services\DateChecker;
use Illuminate\Support\ServiceProvider;

class DateCheckerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind("dateChecker", DateChecker::class);
    }
}
