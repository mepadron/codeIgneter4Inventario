<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonasModel;

class PersonasController extends BaseController
{
    public $personaModel;

    public function __construct()
    {
        $this->personaModel= new PersonasModel();

    }

    public function index()
    {
        // echo $this->personaModel->validarusuario("lolo");
        // $data[]= Array('nombre'=>'miguel','apellido'=>'padron','cedula'=>'9883255');
        $d = Array();
        $d['datos'] = Array('nombre'=>'miguel','apellido'=>'padron','cedula'=>'9883255');
        // $data['pepe']= "lolo";
        return view('bienvenido_persona',$d);
    }
    
    public function hola()
    {
        echo "hola persona";
    }

    public function procesarLogin()
    {
        
        $login=$this->request->getPost('loginForm');
        $clave=$this->request->getPost('claveForm');
        // $data[]= Array('nombre'=>'miguel','apellido'=>'padron','cedula'=>'9883255');
        if($this->personaModel->validarusuario($login,$clave)){ 
            return view('admin/admin_view');
        }else{
            return view('admin/errors/error_custom_view');

        }
        
    }
}
