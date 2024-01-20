@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar estudiante</h1>
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <!-- Agrega más campos según sea necesario -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection