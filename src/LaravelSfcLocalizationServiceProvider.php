<?php

namespace Iammarjamal\LaravelSfcLocalization;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Iammarjamal\LaravelSfcLocalization\Commands\LaravelSfcLocalizationCommand;

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
