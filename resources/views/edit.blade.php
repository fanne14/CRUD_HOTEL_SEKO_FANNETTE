<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>CRUD Edition</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

        <div class="container mt-5">

        <h1>Modifier Produits</h1>


@if ($errors->any())

    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>

@endif

<form method="post" action="{{route('hotel.update', $hotel)}}" >
    
    @csrf
    @method('PUT')

    <div class="form-group mb-3">

        <label for="name_hotel">Name of Hotel:</label>
        <input type="text" class="form-control" id="name_hotel" placeholder="Enter the name's hotel" name="name_hotel" value="{{ $hotel->name }}">

    </div>

    <div class="form-group mb-3">

        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Entrer the description" name="description" value="{{ $hotel->description }}">

    </div>

    <div class="form-group mb-3">

        <label for="name_room">Name of room </label>
        <input type="text" class="form-control" id="name_room" placeholder="Entrer the name's room" name="name_room" value="{{ $hotel->name_room }}">

    </div>
    <div class="form-group mb-3">

        <label for="price">Price:</label>
        <input type="number" class="form-control" id="price" placeholder="price" name="price" value="{{ $hotel->price }}">

    </div>
    <div class="form-group mb-3">

        <label for="number_bed">Number of bed:</label>
        <input type="number" class="form-control" id="number_bed" placeholder="number_bed" name="number_bed" value="{{ $hotel->number_bed }}">

    </div>
    <div class="form-group mb-3">

        <label for="max_adult">Maximum Adult</label>
        <input type="number" class="form-control" id="max_adult" placeholder="max_adult" name="max_adult" value="{{ $hotel->max_adult }}">

    </div>
    <div class="form-group mb-3">

        <label for="max_child">Maximum child:</label>
        <input type="number" class="form-control" id="max_child" placeholder="max_child" name="max_child" value="{{ $hotel->max_child }}">

    </div>
    <div class="form-group mb-3">

        <label for="attributes">Attributes:</label>
        <input type="text" class="form-control" id="attributes" placeholder="attributes" name="attributes" value="{{ $hotel->attributes }}">

    </div>
    <div class="form-group mb-3">

        <label for="statut">Statut:</label>
        <input type="boolean" class="form-control" id="statut" placeholder="statut" name="statut" value="{{ $hotel->statut }}">

    </div>
    

    <button type="submit" class="btn btn-primary">Enregister</button>

</form>


        </div>

    </body>

</html>


