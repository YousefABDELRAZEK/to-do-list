<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::resource('tasks',TaskController::class);
Route::get('/', function () {
    return redirect()->route('tasks.index');
});
