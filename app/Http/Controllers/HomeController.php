<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __invoke(string $locale)
    {
        app()->setLocale($locale);

        return view('home');

    }
}
