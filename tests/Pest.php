<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Alqahtani\DiskMonitor\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function(){
        Route::diskMonitor();
        Storage::fake('local');
        Storage::fake('anotherDisk');
    })
    ->in(__DIR__);
