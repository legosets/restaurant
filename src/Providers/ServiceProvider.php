<?php

namespace Restaurant\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use LegoCMS\Support\Facades\LegoCMS;

/**
 * class ServiceProvider
 *
 * Restaurant ServiceProvider.
 *
 * @category ServiceProviders
 * @package  Restaurant\Providers
 * @author   Basant Besra <besrabasant@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/lego-bricks/online-exam/blob/master/src/Providers/ServiceProvider.php
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Boots application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /**
     * Registers application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        LegoCMS::addLegoSet('restaurant', [
            'namespace' => "Restaurant\\",
            'package_root' => __DIR__ . "/../../",
            'routes_dir' => __DIR__ . "/../../routes/"
        ]);
    }
}
