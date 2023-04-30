@extends('layouts.plantilla')
     
@section('content')
    <h1>Lista de Discos</h1>
    @empty($disks)
        No hay discos registradas
    @endempty
    <form action="{{route('new-disk-formPre')}}" method="post">
        
        <button type="submit">Nuevo Disco</button>
    </form>
    
    {{-- @foreach($disks as $disk)
    <form action={{route('editDeleteDisk')}} method="post">
        @csrf
    <table class="tablas">   
        <tr>
            <td rowSpan="6"><img src="{{$disk->cover}}" width="200"></td>
        </tr>
        <tr>
            <td>Título: {{$disk->disco}}</td>
        </tr>
        <tr>
            <td>Artistas:</td>
        </tr>
            
            <tr>
                <td></td>
                <td> {{$disk->artista}}</td>
            </tr>
            
        </tr>
        <tr>
            <td>Año: {{$disk->year}}</td>
            <input type="hidden" name="id" value={{$disk->diskId}}>
    
            <td> <button type="submit" name="action" value="edit">Editar</button> </td>
        </tr>
        <tr>
            <td>
            <td><button type="submit" name="action" value="delete">Borrar</button>  </td>
        
        </tr>
       
    </table> 
    </form> 
    @endforeach --}}

    
@foreach($disks as $disk)
<form action={{route('editDeleteDisk')}} method="post">
    @csrf
<table class="tablas">   
    <tr>
        <td rowSpan="6"><img src="{{$disk->cover}}" width="200"></td>
    </tr>
    <tr>
        <td>Título: {{$disk->disco}}</td>
    </tr>
    <tr>
        <td>Artistas:</td>
    </tr>
        
        @php
        $artistas = explode(",", $disk->artistas);
        @endphp

        @foreach($artistas as $artista)
        <tr>
            <td></td>
            <td> {{$artista}}</td>
        </tr>
        @endforeach
        
    </tr>
    <tr>
        <td>Año: {{$disk->year}}</td>
        <input type="hidden" name="id" value={{$disk->diskId}}>

        <td> <button type="submit" name="action" value="edit">Editar</button> </td>
    </tr>
    <tr>
        <td>
        <td><button type="submit" name="action" value="delete">Borrar</button>  </td>
    
    </tr>
   
</table> 
</form> 
@endforeach
@endsection