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
        
        // Retorna a view 'dashboard' com a variável 'courses'
        return view('dashboard', compact('courses'));
    }
}
