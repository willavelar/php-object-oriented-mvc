<?php

namespace App\Controllers;

use App\Libraries\Controller;
use App\Libraries\Model;

class Exemple extends Controller
{
    private Model $model;

    public function __construct()
    {
        $this->model = $this->model('Exemple');
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome'
        ];

        $this->view('exemple/index', $data);
    }
}