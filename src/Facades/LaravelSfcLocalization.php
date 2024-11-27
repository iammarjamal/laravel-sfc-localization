<?php

namespace Iammarjamal\LaravelSfcLocalization\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iammarjamal\LaravelSfcLocalization\LaravelSfcLocalization
 */
class LaravelSfcLocalization extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Iammarjamal\LaravelSfcLocalization\LaravelSfcLocalization::class;
    }
}
