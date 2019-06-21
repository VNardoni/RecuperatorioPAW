<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Controller;
use App\Models\Alumnos;

class AlumnosController extends Controller
{

    public function __construct()
    {
        $this->model = new Alumnos();
    }

    /**
     * Show all users.
     */
    public function index()
    {
        return view('users');
    }

    /**
     * Store a new user in the database.
     */
    public function guardarUsuario()
    {
        
        $suma = 0; 
        $suma = $_POST['nota1'] + $_POST['nota2'] + $_POST['nota3'];
        $promedio = 0;
        $promedio = $suma / 3;
                                        
        $datos = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'nota1' => $_POST['nota1'],
            'nota2' => $_POST['nota2'],
            'nota3' => $_POST['nota3'],
            'promedio' => $promedio
        );
        
        $this->model->insert($datos);
        return view('formulario');
    }
    
    public function listadoAlumnos() {
        $alumnos = $this->model->get();
        
        return view('listado', compact('alumnos'));
    }
    
}
