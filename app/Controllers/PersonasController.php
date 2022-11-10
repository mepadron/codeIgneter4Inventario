<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PersonasController extends BaseController
{
    public function index()
    {
        return view('bienvenido_persona');
    }

    public function hola()
    {
        echo "hola persona";
    }
}
