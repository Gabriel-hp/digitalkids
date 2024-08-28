@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bem-vindo, {{ Auth::user()->name }}</h1>
    <p>Nível: {{ Auth::user()->level }}</p>
    <p>Pontuação: {{ Auth::user()->score }}</p>

    <h2>Seus Cursos</h2>
   
</div>
@endsection
