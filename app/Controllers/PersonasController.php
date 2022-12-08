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

    public function procesarLogin()
    {
        
        $login=$this->request->getPost('loginForm');
        $clave=$this->request->getPost('claveForm');
        $data[]= Array();
        if($login=="mpadron" and $clave=="1234"){
            $data['login']= $login;            
            // echo "usted esta logueado";
            return view('admin/admin_view', $data);
            
        }else{
            // echo "NOOOOOOO esta logueado";
            $data['login']= $login;            
            return view('admin/errors/error_custom_view', $data);


        }
    }
}
