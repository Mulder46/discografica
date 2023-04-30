

    @extends('layouts.plantilla')
     
    @section('content')
    <h1>Editar Artista</h1>
    <form action="{{route('updateArtist')}}" method="post" class="formulario">
        @csrf
    <label>Artista</label>
      <select name="id">
      @foreach($artists as $artist) 
        <option value={{$artist->id}}>{{$artist->artistName}}</option>
        @endforeach
      </select>
      <div class="cajas">
            Nombre real:<input type="text" name="name">
      </div>
      <div class="cajas">
            Nombre artístico:<input type="text" name="artistName">
      </div>
      <div class="envio">
            <input type="submit" value="Enviar" />
      </div>
    </form>
    @endsection
