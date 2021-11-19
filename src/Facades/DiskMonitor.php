<?php

namespace Alqahtani\DiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alqahtani\DiskMonitor\DiskMonitor
 */
class DiskMonitor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
