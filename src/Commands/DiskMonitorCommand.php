<?php

namespace Alqahtani\DiskMonitor\Commands;

use Illuminate\Console\Command;

class DiskMonitorCommand extends Command
{
    public $signature = 'laravel-disk-monitor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
