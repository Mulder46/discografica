@extends('layouts.plantilla')
     
@section('content')
    <h1>Lista de Artistas</h1>
    @empty($artists)
     No hay artistas registrados
    @endempty
    <ul>
    @foreach ($artists as $artist)
            <li> {{ $artist->name }} Alias:  {{ $artist->artistName }} </li>
    @endforeach
    </ul>
@endsection