@extends('layouts.master')

@section('content')

{{-- nuevo --}}
<form enctype="multipart/form-data" class="pt-4" method="POST" action="{{url('create')}}">
    
    @csrf 
    <div class="form-group cajas col-4 mx-auto pt-auto">

        <div class="form-group row">
            {{-- Nombre --}}
            <label class="labelAlta col-sm-4 col-form-label">Nombre:</label>
            <div class="col-sm-12">
                <input type="text" name="name" class="inputAlta form-control box"  id="nombre" placeholder="Nombre">
                <p id="mensajeError"></p>
            </div>
            
            {{-- Apellido --}}
            <label class="labelAlta col-sm-4 col-form-label">Descripcion:</label>
            <div class="col-sm-12">
                <input type="text" name="description" class=" inputAlta form-control box"  id="apellido" placeholder="Apellido">
                <p  class="box"  id="mensajeErrorA"></p>
            </div>

         </div>

         {{-- Fecha nacimiento --}}
        <div class="form-group row">
            <label class="labelAlta col-sm-12 col-form-label">Contenido:</label>
            <div class="col-sm-12">
                <input type="text" placeholder="Fecha Nacemiento" name="content" class="inputAlta form-control box" id="fNacimiento" required>
                <p  class="box"  id="mensajeErrorFN"></p>
            </div>
         </div>
         {{-- Imagen --}}
         <div class="form-group row">
            <label class="labelAlta col-sm-2 col-form-label">Imagen: </label>
            <div class="col-sm-12">
                <input type="file" name="imagen" class="inputAlta form-control-file is-valid" accept=".jpg, .png, .gif, .jpeg">
            </div>
         </div>

        <div class="form-row pt-5 box">
            <div class="col-2">
                <button type="reset" class="btn btn-outline-light box">Limpiar</button>
            </div>
            {{-- <div class="col">
            <button type="button" class="btn btn-outline-light">Volver</button>
            </div> --}}
            <button class="btn col-3 btn-outline-light box" type="submit" id="submit">Enviar</button>
        </div>
 
    </div>
    <p id="mensajeError"></p>
</form>


@endsection