<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index()
    {
        return view('landing'); // langsung tanpa folder
    }
}
