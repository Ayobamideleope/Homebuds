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

use Carbon\Carbon;
use Faker\Factory;

Route::get('/', function () {
    $categories = [
        'Finance' => ['Banking', 'Bureau de change'],
        'Engineering' => ['Mechanics', 'Electricians'],
        'Clothing' => ['Tailors', 'Launders', 'Fashion Designers'],
        'Sales' => ['Groceries', 'Electronics', 'Blinds', 'Cosmetics']
    ];
    $cat_keys = array_keys($categories);
    $locations = ['Kwara', 'Ibadan', 'Lagos', 'Kano', 'Port-harcourt'];
    $ads = [];
    $faker = Factory::create();
    for ($i = 0;  $i < 24; $i++) {
        $ad= [];
        $ad['name'] = $faker->company . ' ' . $faker->companySuffix;
        $ad['description'] = $faker->catchPhrase;
        $rand = rand(0, 4);
        $ad['location'] = $locations[$rand];
        $yesterday = Carbon::yesterday();
        $yesterday = $yesterday->diffForHumans();
        $ad['date'] = $yesterday;
        $rand = rand(0, 3);
        $ad['category'] = $cat_keys[$rand];
        $ads[] = $ad;
    }
        return view('home', compact(['categories', 'cat_keys', 'ads']));
});

Route::resource('/products', 'ProductsController');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
