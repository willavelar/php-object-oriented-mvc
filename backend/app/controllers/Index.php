<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Index extends Controller
{
    public function index() : void
    {
        $this->view('index', ['title' => 'Welcome']);
    }
}