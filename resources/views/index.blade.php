<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>CRUD Gestion des chambres d'un hotel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

        <div class="container mt-5">




    <h1>Ajouter une chambre </h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('hotel') }}" method="POST">
        @csrf

       

        <div class="form-group mb-3">

            <label for="name_hotel">Name of Hotel:</label>
            <input type="text" class="form-control" id="name_hotel" placeholder="Enter the hotel's name" name="name_hotel">

        </div>
    
        <div class="form-group mb-3">
            <label for="description">Description :</label>
            <input class="form-control" id="description" name="description" rows="10" placeholder="description">
        </div>
        
        <div class="form-group mb-3">
            <label for="name_room">Name of Room :</label>
            <input class="form-control" id="name_room" name="name_room" rows="10" placeholder="name_room">
        </div>
        <div class="form-group mb-3">
            <label for="price">Price :</label>
            <input class="form-control" id="price" name="price" rows="10" placeholder="price">
        </div>
        <div class="form-group mb-3">
            <label for="number_bed">Number of Bed:</label>
            <input class="form-control" id="number_bed" name="number_bed" rows="10" placeholder="number_bed">
        </div>

        <div class="form-group mb-3">
            <label for="max_adult"> Maximum Adult:</label>
            <input class="form-control" id="max_adult" name="max_adult" rows="10" placeholder="max_adult" >
        </div>

        <div class="form-group mb-3">
            <label for="max_child"> Maximum child:</label>
            <input class="form-control" id="max_child" name="max_child" rows="10" placeholder="max_child" >
        </div>

        <div class="form-group mb-3">
            <label for="attributes"> Attributes:</label>
            <input class="form-control" id="attributes" name="attributes" rows="10" placeholder="attributes" >
        </div>

        <div class="form-group mb-3">
        <select name="statut" class="form-control">
			<option selected="">choisir le statut</option>
			<option value="1">Disponible</option>
			<option value="0">Non Disponible</option>
		</select>
        </div>

        
        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>





        </div>

    </body>

</html>