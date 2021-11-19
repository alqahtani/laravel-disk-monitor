<?php

use Alqahtani\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Alqahtani\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function PHPUnit\Framework\assertEquals;

it('will record the file count for a disk', function () {
    artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();
    assertEquals(0, $entry->file_count);

    Storage::disk('local')->put('test.txt', 'test');
    artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();
    assertEquals(1, $entry->file_count);
});
