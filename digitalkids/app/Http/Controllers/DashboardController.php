<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // Certifique-se de importar o modelo Course

class DashboardController extends Controller
{
    public function dashboard()
    {   
        // Busca todos os cursos no banco de dados
        $courses = Course::all();

        dd($courses); // Exibe o conteúdo de $courses e para a execução
        return view('dashboard', compact('courses'));
    }
}
