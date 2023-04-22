<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  @include('menu')
    <form action="/update-artist" method="post">
        @csrf
    <label for="cat">Artista</label>
      <select name="artists" id="lang">
      @foreach($artists as $artist) 
        <option value={{$artist->id}}>{{$artist->artistName}}</option>
        @endforeach
      </select>
      <input type="submit" value="Enviar" />
    </form>
</body>
</html>