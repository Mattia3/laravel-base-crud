<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
   <h1>Creazione nuovo fumetto</h1>

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

    <form action="{{ route("comics.store") }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="field_title" class="form-label">TITOLO</label>
        <input type="text" class="form-control {{ $errors->has("title") ? 'is-invalid' : '' }}" id="field_title"  name="title">

      @if($errors->has("title"))
      <div class="invalid-feedback">
        {{ $errors->get("title")[0]}}
      </div>
      @endif
      </div>

      <div class="mb-3">
        <label for="field_price" class="form-label">PRICE</label>
        <input type="text" class="form-control {{ $errors->has("price") ? 'is-invalid' : '' }}" id="field_price" name="price">

      @if($errors->has("price"))
      <div class="invalid-feedback">
        {{ $errors->get("price")[0]}}
      </div>
      @endif
      </div>

      <div class="mb-3">
        <label for="field_type" class="form-label">TYPE</label>
        <input type="text" class="form-control {{ $errors->has("type") ? 'is-invalid' : '' }}" id="field_type"  name="type">

      @if($errors->has("type"))
      <div class="invalid-feedback">
        {{ $errors->get("type")[0]}}
      </div>
      @endif
      </div>

      <div>
        <button class="btn btn-success" type="submit">Crea</button>
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Home</a>
      </div>

    </form>
  </div>
</body>
</html>