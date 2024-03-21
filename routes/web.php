<?php

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile_settings', 'profile_settings')
    ->middleware(['auth'])
    ->name('profile_settings');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('habits', 'habits')->name('habits');

Route::view('gallery', 'gallery')->name('gallery');

Route::view('tasks', 'tasks')->name('tasks');

Route::view('projects', 'projects')->name('projects');

Route::get('projects/{id}', function (string $id){
    return view('projects.project', ["id" => $id]);
})->name('project.show');


require __DIR__.'/auth.php';
