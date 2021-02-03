@extends('layouts.master')
{{-- <link rel="stylesheet" href="{{ asset('css/plantilla.css')}}" type="text/css"> --}}
@section('content')
<div class="mx-auto mt-5 col-10">
<h1>Listado de mujeres</h1>

@if (session('mensaje'))
<div class="alert alert-success fade show">
    {{ session('mensaje') }}
</div>
@endif

<table class="table table-bordered table-dark">
    <thead>
      <tr>
          {{-- <th class="text-center">Id</th> --}}
          <th class="text-center">Nombre</th>
          {{-- <th class="text-center">Descripcion</th> --}}
          {{-- <th class="text-center">Contenido</th> --}}
          <th class="text-center">imagen</th>
      </tr>
    </thead>
    <tbody>
      @foreach($task as $obj)
          <tr>
              {{-- <td class="text-center">{{ $obj->id}}</td> --}}
              <td class="text-center">
                <a href="{{route('show', $obj->id)}}">{{ $obj->name}}</a> {{-- al pinchar muestra mas detalles de una mujer --}}
              </td>
              {{-- <td class="text-center">{{ $obj->description }}</td>
              <td class="text-center">{{ $obj->content}}</td> --}}
              <td class="text-center">
                <a href="{{route('show', $obj->id)}}"><img class="imagen" src="img/fotosMujeres/{{ $obj->imagen}}" style="height:200px"/></a> {{-- al pinchar muestra mas detalles de una mujer --}}
                </td>
              <td>
                 <form action="{{route('delete', $obj->id)}}" class="d-inline" method="POST">
                  <button type="button" class="btn btn-success">
                    <a href="{{route('update', $obj->id)}}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                    </a>
                  </button>
                  <br>
                  <br>

                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                   
                  </button>
              </form> 

                
              </td>
      @endforeach
    </tbody>
  </table>
  
</div>
@endsection



