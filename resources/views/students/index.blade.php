@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estudiantes</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Agregar estudiante</a>
    <ul class="list-group mt-3">
        @foreach($students as $student)
        <li class="list-group-item">
            {{ $student->name }}
            <!-- Agrega más campos según sea necesario -->
        </li>
        @endforeach
    </ul>
</div>
@endsection