<?php

use Illuminate\Support\Facades\Route;

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
    $links = config('store.links');
    $footerNavLinks = config('store.footerNavLinks');
    $comics = config('comics-database.comics');
    return view('welcome', compact('links', 'footerNavLinks', 'comics'));
})->name('home');

Route::get('/characthers', function () {
    $links = config('store.links');
    $footerNavLinks = config('store.footerNavLinks');
    return view('characthers', compact('links', 'footerNavLinks'));
})->name('characthers');

Route::get('/comics1', function () {
    $links = config('store.links');
    $footerNavLinks = config('store.footerNavLinks');
    $comics = config('comics-database.comics');
    return view('comics1', compact('links', 'footerNavLinks', 'comics'));
})->name('comics1');
