<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AllQuiz;
use App\Http\Livewire\SettingsQuiz;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', AllQuiz::class)->name("home");
Route::get("/settings", SettingsQuiz::class)->name("settings");
