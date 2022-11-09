<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menu = [
            [
                'title'=>'Gestion de Alumnos',
                'color'=>'#073763',
                'img'=>'estudiantes.png',
                'route'=>'students.index'
            ],
            [
                'title'=>'Gestion de Docentes',
                'color'=>'#009e0f',
                'img'=>'docentes.jpg',
                'route'=>'professors.index'
            ],
            [
                'title'=>'Gestion de Cursos',
                'color'=>'#b45f06',
                'img'=>'cursos.webp',
                'route'=>'students.index'
            ],
            [
                'title'=>'Gestion de Asignaturas',
                'color'=>'#990000',
                'img'=>'asignaturas.png',
                'route'=>'subjects.index'
            ],
            [
                'title'=>'Asignaciones',
                'color'=>'#674ea7',
                'img'=>'asignaciones.png',
                'route'=>'students.index'
            ],
            [
                'title'=>'Registro de Notas',
                'color'=>'#ffff00',
                'img'=>'notas.png',
                'route'=>'students.index'
            ]
        ];
        return view('home',compact('menu'));
    }
}
