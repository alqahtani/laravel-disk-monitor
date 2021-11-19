<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Alqahtani\DiskMonitor\Tests\TestCase;

uses(TestCase::class)
<<<<<<< HEAD
    ->beforeEach(function () {
=======
    ->beforeEach(function(){
        Route::diskMonitor();
>>>>>>> 98aff87 (a lot of work)
        Storage::fake('local');
        Storage::fake('anotherDisk');
    })
    ->in(__DIR__);
