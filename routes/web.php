<?php

use Illuminate\Support\Facades\Route;

Route::view('/{any}', 'pages.home')
    ->where('any', '.*');
