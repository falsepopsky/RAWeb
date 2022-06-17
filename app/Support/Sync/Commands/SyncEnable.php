<?php

declare(strict_types=1);

namespace App\Support\Sync\Commands;

use App\Support\Settings\Settings;
use Illuminate\Console\Command;

class SyncEnable extends Command
{
    protected $signature = 'ra:settings:sync:enable';

    protected $description = 'Enable Sync';

    public function __construct(
        private Settings $settings
    ) {
        parent::__construct();
    }

    public function handle(): void
    {
        $this->settings->put('sync', 1);
    }
}
