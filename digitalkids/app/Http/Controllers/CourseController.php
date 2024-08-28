<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class CourseController extends Controller
{
    // Método para exibir detalhes de um curso específico
    public function show($id) {
        // Busca o curso pelo ID ou falha se não encontrar
        $course = Course::findOrFail($id);

        // Obtém o usuário autenticado
        $user = auth()->user();
        $isUserEnrolled = false;

        // Verifica se o usuário está autenticado e inscrito no curso
        if($user) {
            $isUserEnrolled = $user->courses->contains($id);
        }

        // Obtém as informações do criador do curso
        $courseOwner = User::where('id', $course->user_id)->first();

        // Retorna a view com os dados do curso, do criador e se o usuário está inscrito
        return view('courses.show', [
            'course' => $course,
            'courseOwner' => $courseOwner,
            'isUserEnrolled' => $isUserEnrolled
        ]);
    }
    
    // Método para exibir todos os cursos
    public function index() {
        // Busca todos os cursos
        $courses = Course::all();

        // Retorna a view com a lista de cursos
        return view('courses.welcome', compact('courses'));
    }
}
