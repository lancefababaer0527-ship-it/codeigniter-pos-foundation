<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): String
    {
        return view('home');
    }

    public function about(): String
    {
        return view('about');
    }
}
?>