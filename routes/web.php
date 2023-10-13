<?php

use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

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

Route::get('/register',Register::class);
Route::get('/', Login::class);
Route::get('/dashboard', Dashboard::class);
