<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
   <h1>Modifica Fumetto</h1>

   @if($errors->any())
   <div class="alert alert-danger">
     Ci sono errori nel form:
     <ul>
       @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
     </ul>
   </div>
   @endif

    <form action="{{ route("comics.update", $comic->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="field_title" class="form-label">TITOLO</label>
        <input type="text" class="form-control {{ $errors->has("title") ? 'is-invalid' : '' }}" 
        id="field_title"  name="title" 
        value="{{ old("title") ?? $comic->title }}">

      @if($errors->has("title"))
      <div class="invalid-feedback">
        {{ $errors->get("title")[0]}}
      </div>
      @endif
      </div>

      <div class="mb-3">
        <label for="field_price" class="form-label">PRICE</label>
        <input type="text" class="form-control {{ $errors->has("price") ? 'is-invalid' : '' }}" 
        id="field_price" name="price" 
        value="{{old("price") ?? $comic->price}}">

      @if($errors->has("price"))
      <div class="invalid-feedback">
        {{ $errors->get("price")[0]}}
      </div>
      @endif
      </div>

      <div class="mb-3">
        <label for="field_type" class="form-label">TYPE</label>
        <input type="text" class="form-control {{ $errors->has("type") ? 'is-invalid' : '' }}"
         id="field_type"  name="type"  
         value="{{old("type") ?? $comic->type}}">

      @if($errors->has("type"))
      <div class="invalid-feedback">
        {{ $errors->get("type")[0]}}
      </div>
      @endif
      </div>

      <input class="btn btn-success" type="submit" value="invia">
    </form>
  </div>
</body>
</html>