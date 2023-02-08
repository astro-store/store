<?php

namespace AstroStore\Store;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AstroStore\Store\Commands\StoreCommand;

class StoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('store')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_store_table')
            ->hasCommand(StoreCommand::class);
    }
}
