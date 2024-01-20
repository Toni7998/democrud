@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $student->name }}</h1>
    <!-- Agrega más campos según sea necesario -->
    <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Editar</a>
</div>
@endsection