

    @extends('layouts.plantilla')
     
    @section('content')
    <form action="update-artist" method="post" class="formulario">
        @csrfgit 
    <label>Artista</label>
      <select name="artists" id="lang">
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
