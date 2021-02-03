@extends('layouts.master')

@section('content')
<div class="container mx-auto mt-5 col-10">
    <h1>Editar</h1>
    <div class="container mx-auto mt-5 col-6">  
      <form enctype="multipart/form-data" action="{{url('edit', $tareaUpdate->id) }}" method="POST">
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
        </div>
        <div class="form-group row">
            <input type="text" name="description" placeholder="Descripcion" class="form-control mb-2" 
            value="{{ $tareaUpdate->description }}">
        </div>
        <div class="form-group row">
            <input type="text" name="content" placeholder="Nombre" class="form-control mb-2" value="{{ $tareaUpdate->content }}">
        </div>
        <div class="form-group row">
            {{-- <input type="text" name="imagen" placeholder="Descripcion" class="form-control mb-2" 
           > --}}
            {{-- <img src="img/fotosMujeres/{{ $tareaUpdate->imagen }}" style="height:200px"/> --}}
            <img src="img/fotosMujeres/{{$tareaUpdate->imagen}}" style="height:200px"/>

            <input  name="imagen" value="{{$tareaUpdate->imagen}}">
            {{-- {{ $obj->imagen}} --}}
        
            
            <div class="col-sm-12">
                <label class="labelAlta col-sm-2 col-form-label">Modificar imagen </label>
                <input name="imagen" type="file" class="inputAlta form-control-file is-valid" accept=".jpg, .png, .gif, .jpeg">
            </div>
        </div>
        <div class="form-group col-4">
            <button class="btn btn-warning btn-block" type="submit">Editar</button>
        </div>
        
     </form>
    </div>
</div>
@endsection