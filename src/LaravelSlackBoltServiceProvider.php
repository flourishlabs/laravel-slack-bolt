<?php

namespace FlourishLabs\LaravelSlackBolt;

use FlourishLabs\LaravelSlackBolt\Commands\LaravelSlackBoltCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSlackBoltServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-slack-bolt')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-slack-bolt_table')
            ->hasCommand(LaravelSlackBoltCommand::class);
    }
}
