@extends('layouts.master')

@section('content')
        <h1>Editar</h1>
      
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
        <div class="form-group row">
            <input type="text" name="name" placeholder="Nombre" class="form-control mb-2" value="{{ $tareaUpdate->name }}">
            <input type="text" name="description" placeholder="Descripcion" class="form-control mb-2" 
            value="{{ $tareaUpdate->description }}">
            </div>
        
        <button class="btn btn-warning btn-block" type="submit">Editar</button>
    </form>
@endsection