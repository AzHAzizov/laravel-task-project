<?php
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::resource('/tasks', TasksController::class)->missing(function () {
    return Redirect::route('tasks.index');
});;
