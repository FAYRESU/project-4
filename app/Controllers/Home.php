<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

      public function show(): string
    {
        return "SE NPRU";
    }
}
