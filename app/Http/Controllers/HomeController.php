<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Faker;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = [
            'Finance' => ['Banking', ''],
            'Engineering' => ['Mechanics', 'Electricians'],
            'Clothing' => ['Tailors', 'Launders', 'Fashion Designers'],
            'Sales' => ['Groceries', 'Electronics', 'Blinds', 'Cosmetics']
        ];
        $locations = ['Kwara', 'Ibadan', 'Lagos', 'Kano', 'Port-harcourt'];
        $ads = [];
        $faker = Faker\Factory::create();
        for ($i = 0;  $i < 24; $i++) {
            $ad= [];
            $ad['Name'] = $faker->company . ' ' . $faker->companySuffix;
            $ad['Desc'] = $faker->catchPhrase;
            $rand = rand(0, 4);
            $ad['loc'] = $locations[$rand];
            $yesterday = Carbon::yesterday();
            $yesterday = $yesterday->diffForHumans();
            $ad['date'] = $yesterday;
            $rand = rand(0, 3);
            $ad['cat'] = key($categories[$rand]);
            $ads[] = $ad;
        }
        return dd(['ads' => $ads, 'categories', $categories]);
//        return view('home', compact(['categories', 'ads']));
    }
}
