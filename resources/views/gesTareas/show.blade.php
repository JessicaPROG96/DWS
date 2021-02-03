@extends('layouts.master')

@section('content')

<h4>Id: {{ $nota->id }}</h4>
<h4>Nombre: {{ $nota->name }}</h4>
<br>
<h4>Descripción: {{ $nota->description }}</h4>
<img src="img/fotosMujeres/{{$nota->imagen}}" style="height:200px" alt="imagen no disponible, sentimos las molestias"/>
{{-- @foreach($nota as $obj) --}}
{{-- <img class="imagen" src="img/fotosMujeres/{{ $obj['imagen']}}" style="height:200px"/></a> al pinchar muestra mas detalles de una mujer --}}
      {{-- @endforeach    --}}
<h4>Contenido: {{ $nota->content }}</h4>  
{{-- <img class="imagen" src="/public/img/fotosMujeres/{{ $nota->$image}}" style="height:200px"/> --}}
{{-- <img class="imagen" src="img/fotosMujeres/{{$nota['imagen']}}" style="height:200px"/> --}}

@endsection