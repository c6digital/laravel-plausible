<?php

namespace C6Digital\Plausible;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use C6Digital\Plausible\Commands\PlausibleCommand;

class PlausibleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-plausible')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-plausible_table')
            ->hasCommand(PlausibleCommand::class);
    }
}
