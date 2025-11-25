<?php

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
use Spatie\Sitemap\SitemapGenerator;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', 'ContactController@send')->name('contact.send');
Route::get('/generate-sitemap', function () {
    SitemapGenerator::create('https://rushpoint.com.ph')->writeToFile(public_path('sitemap.xml'));
    return 'Sitemap generated!';
});

Route::get('/{id}','ContactController@view');
