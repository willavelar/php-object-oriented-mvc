<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Index extends Controller
{
    public function index()
    {
        $this->view('index', ['title' => 'Welcome']);
    }
}