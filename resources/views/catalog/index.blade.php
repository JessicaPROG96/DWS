@extends('layouts.master')

@section('content')

  Listado peliculas
buccle para sacar cada una de las peliculas
    <div class="row"> <!-- fila -->
    @foreach( $arrayPeliculas as $key => $pelicula ) <!--Notación de blade-->
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/catalog/show/' . $key ) }}"> <!--Para que al pulzar sobre la pelicula nos lleve a más info de la peli-->
            <img src="{{$pelicula['poster']}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$pelicula['title']}}
            </h4>
            <p>
            {{$pelicula['year']}}
            </p>
        </a>

    </div>
    @endforeach

</div>

@stop