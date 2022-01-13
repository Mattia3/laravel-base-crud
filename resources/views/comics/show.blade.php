<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h1>TITLE: {{ $comic->title }}</h1>
    <h3>PRICE: {{ $comic->price }} </h3>
    <h3>TYPE: {{ $comic->type }} </h3>
    {{-- @dump($comic) --}}
    <div class="d-flex mt-5">
      <a class="btn btn-primary" href="{{ route("comics.index") }}">Home</a>
      <a class="btn btn-success mx-4" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>

      <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="form-delete">
      @csrf
      @method('delete')
      {{-- <input type="hidden" name="userName" value="{{ $user->name }}"> --}}

        <button type="submit" class="active btn btn-danger">Elimina</button>
      </form>
    </div>
  </div>
</body>
</html>