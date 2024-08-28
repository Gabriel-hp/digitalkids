<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Cursos</h1>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course->title }}</li>
        @endforeach
    </ul>
</div>
@endsection


</body>
</html>