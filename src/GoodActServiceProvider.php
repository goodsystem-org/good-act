<?php

namespace GoodSystem\GoodAct;

use Illuminate\Support\ServiceProvider;

class GoodActServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
