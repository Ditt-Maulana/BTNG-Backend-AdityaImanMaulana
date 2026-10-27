<?php
use Illuminate\Support\Facades\Route;
Route::get('/', fn () => response()->json(['message' => 'Nusantara Motors REST API', 'docs' => url('/docs/api'), 'endpoint' => url('/api/mobil')]));
