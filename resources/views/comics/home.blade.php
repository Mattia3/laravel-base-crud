<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Lista Fumetti</h1>
    <a class="btn btn-primary my-4" href="{{ route('comics.create') }}">Aggiungi</a> 

    <ul>
      @foreach($comics as $comic)
        <li><a href="{{ route('comics.show', $comic->id) }}">TITLE: {{ $comic["title"] }} PRICE: {{ $comic["price"] }} TYPE: {{ $comic["type"] }}</a></li>
      @endforeach
    </ul>
  </div>
</body>
</html>