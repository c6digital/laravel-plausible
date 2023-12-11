<?php

namespace C6Digital\Plausible;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PlausibleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-plausible')
            ->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->singleton(Plausible::class, fn ($app) => new Plausible(
            $app['config']->get('plausible.domain')
        ));
    }
}
