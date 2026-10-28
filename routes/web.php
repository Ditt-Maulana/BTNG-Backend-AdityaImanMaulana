<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Nusantara Motors REST API',
        'docs' => '/docs/api',
        'endpoint' => '/api/mobil',
    ]);
});