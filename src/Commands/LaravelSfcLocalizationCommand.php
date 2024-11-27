<?php

namespace Iammarjamal\LaravelSfcLocalization\Commands;

use Illuminate\Console\Command;

class LaravelSfcLocalizationCommand extends Command
{
    public $signature = 'laravel-sfc-localization';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
