<?php

namespace Alqahtani\DiskMonitor\Http\Controllers;

use Alqahtani\DiskMonitor\Models\DiskMonitorEntry;

class DiskMetricsController
{
    public function __invoke()
    {
        return 'ok';
        // $entries = DiskMonitorEntry::latest()->get();

        // return view('disk-monitor::entries', compact('entries'));
    }
}
