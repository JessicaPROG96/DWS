@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        @foreach( $arrayPeliculas as $key) <!--Notación de blade-->
                @foreach ($key as $pelicula)
                {{$pelicula['title']}}
                @endforeach
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

         <!--Para que al pulzar sobre la pelicula nos lleve a más info de la peli-->
         
    </div>
    @endforeach
        
        hola mundo

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos de la película --}}

    </div>
</div>
    



@stop