<?php

namespace HuiHo\LaravelDockerize;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);
        }
    }

    public function provides()
    {
        return [
            PublishCommand::class,
        ];
    }
}
