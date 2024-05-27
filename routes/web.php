<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

Route::get('/{any}', [FrontEndController::class, 'home'])
    ->where('any', '.*');
