<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'skills' => \App\Models\Skill::all(),
        'projects' => \App\Models\Project::all()
    ]);
});

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

/*Route::get('/test', function () {
    return new \App\Mail\ContactedMessage('test@test.com', 'Just testing');
});*/
