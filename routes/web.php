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

Route::view('/', 'welcome.welcome');

Route::view('/changelog', 'welcome.changelog');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile/settings', 'profile.settings')
    ->middleware(['auth'])
    ->name('user.settings');


Route::view('user/profile', 'profile.profile')
    ->middleware(['auth'])
    ->name('profile');

    
Route::view('app/settings', 'app.settings')->name('app.settings');

Route::view('habits', 'habits')->name('habits');

Route::view('gallery', 'gallery')->name('gallery');

Route::view('tasks', 'tasks')->name('tasks');

Route::view('projects/project-list', 'projects.project-list')->name('projects');

Route::get('project/{id}', function (string $id){
    return view('projects.view', ["id" => $id]);
})->name('project.show');


Route::get('user/{id}', function (string $id){
    return view('profile.profile', ["id" => $id]);
})->name('user.profile');

require __DIR__.'/auth.php';
