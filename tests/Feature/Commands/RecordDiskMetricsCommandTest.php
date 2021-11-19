<?php

use Alqahtani\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Alqahtani\DiskMonitor\Models\DiskMonitorEntry;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\artisan;
use function PHPUnit\Framework\assertEquals;

<<<<<<< HEAD
it('will record the file count for a disk', function () {
=======
it('will record the file count for a single disk', function () {

>>>>>>> 98aff87 (a lot of work)
    artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();
    assertEquals(0, $entry->file_count);

    Storage::disk('local')->put('test.txt', 'test');
    artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);
    $entry = DiskMonitorEntry::last();
    assertEquals(1, $entry->file_count);
});

it('will record the file count for multiple disks', function () {

    config()->set('disk-monitor.disk_names', ['local', 'anotherDisk']);
    Storage::disk('anotherDisk')->put('test.txt', 'test');

    artisan(RecordDiskMetricsCommand::class)->assertExitCode(0);

    $entries = DiskMonitorEntry::get();

    assertCount(2, $entries);

    assertEquals('local', $entries[0]->disk_name);
    assertEquals(0, $entries[0]->file_count);

    assertEquals('anotherDisk', $entries[1]->disk_name);
    assertEquals(1, $entries[1]->file_count);
});
