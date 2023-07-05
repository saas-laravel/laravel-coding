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

Route::get('/', function () {
    return 'It\'s working';
});

Route::post('/users', function (Illuminate\Http\Request $request) {
    \App\Models\User::create([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'password' => Str::random(),
    ]);
})->middleware('role:team_owner');
