@extends('layouts.master')

@section('content')
        <h1>Editar</h1>
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif
        <form action="{{url('edit', $tareaUpdate->id) }}" method="POST">
        @method('PUT')
        @csrf

        @error('name')
            <div class="alert alert-danger">
                El nombre es obligatorio
            </div>
        @enderror

        @error('description')
            <div class="alert alert-danger">
                La descripción es obligatoria
            </div>
        @enderror

        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $tareaUpdate->name }}">
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" 
        value="{{ $tareaUpdate->description }}">
        <button class="btn btn-warning btn-block" type="submit">Editar</button>
        </form>
@endsection