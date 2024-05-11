<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

route::get('',fn()=> route('jobs.index'));

Route::resource('jobs',JobController::class)
->only(['index','show']);
