<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        //   echo "soy el controlador";
        // return view('welcome_message');
        
    }
    public function index()
    {
        // echo "soy el controlador";
        return view('welcome_message');
    }
    
}
