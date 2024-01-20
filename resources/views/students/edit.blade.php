@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar estudiante</h1>
    <form action="{{ route('students.update', $student) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
        </div>
        <!-- Agrega más campos según sea necesario -->
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection