<?php

namespace Alqahtani\DiskMonitor;

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alqahtani\DiskMonitor\Commands\RecordDiskMetricsCommand;
use Alqahtani\DiskMonitor\Http\Controllers\DiskMetricsController;

class DiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk_monitor_table')
            ->hasCommand(RecordDiskMetricsCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('diskMonitor', function(string $prefix = 'disk-monitor') {
            Route::prefix($prefix)->group(function() {
                Route::get('/', DiskMetricsController::class);
            });
        });
    }
}
