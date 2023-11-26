<?php

namespace PhoneBocx\UI\Laravel;

use PhoneBocx\UI\Commands\ListCalls;

class EmbeddedServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/coreui.php');
        $this->loadViewsFrom(__DIR__ . '/../../views', 'coreui');
        $this->publishes([
            __DIR__ . "/../../assets" => public_path("coreui"),
        ]);
        $commands = [ListCalls::class];
        $this->commands($commands);
    }
}
