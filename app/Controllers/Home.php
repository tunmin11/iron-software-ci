<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('header')
                .view('detail')
                .view('footer');
    }
}
