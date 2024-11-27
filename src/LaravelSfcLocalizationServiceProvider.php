<?php

namespace Iammarjamal\LaravelSfcLocalization;

use Iammarjamal\LaravelSfcLocalization\Commands\LaravelSfcLocalizationCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSfcLocalizationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sfc-localization')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_sfc_localization_table')
            ->hasCommand(LaravelSfcLocalizationCommand::class);
    }
}
