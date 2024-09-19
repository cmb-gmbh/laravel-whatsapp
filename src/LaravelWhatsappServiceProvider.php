<?php

namespace CmbGmbh\LaravelWhatsapp;

use CmbGmbh\LaravelWhatsapp\Commands\LaravelWhatsappCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelWhatsappServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-whatsapp')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_whatsapp_table')
            ->hasCommand(LaravelWhatsappCommand::class);
    }
}
