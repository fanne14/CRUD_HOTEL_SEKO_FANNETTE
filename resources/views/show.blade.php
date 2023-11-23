
<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>Tutoriel Laravel 9 CRUD pour débutant : insérer, Lire, modifier et supprimer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

        <div class="container mt-5">
          
        <h1>CRUD Affichage des informations des chambres </h1>


<table class="table table-bordered">

    <tr>
        <th>Name of hotel:</th>
        <td>{{ $hotel->name_hotel }}</td>
    </tr>

    <tr>

        <th>Name of room:</th>
        <td>{{ $hotel->name_room }}</td>

    </tr>

    <tr>

        <th>Price:</th>
        <td>{{ $hotel->price }}</td>

    </tr>

    <tr>

        <th>Number of bed:</th>
        <td>{{ $hotel->number_bed }}</td>

    </tr>
    
    <tr>

        <th>Statut:</th>
        <td>{{ $hotel->statut }}</td>

    </tr>

</table>




        </div>

    </body>

</html>



