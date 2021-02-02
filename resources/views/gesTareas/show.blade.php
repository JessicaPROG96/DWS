@extends('layouts.master')

@section('content')

<h4>Id: {{ $nota->id }}</h4>
<h4>Nombre: {{ $nota->nombre }}</h4>
<h4>Descripción: {{ $nota->description }}</h4>

@endsection