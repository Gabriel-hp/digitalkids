<?php

namespace App\Http\Controllers;
use App\Models\Course;

abstract class Controller
{
    public function index()
    {
        // Obter todos os cursos
        $courses = Course::all();

        // Passar os cursos para a view
        return view('welcome', compact('courses'));
    }

}
