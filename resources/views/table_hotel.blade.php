

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
        <div class="row">

<div class="col-lg-11">

    <h2> CRUD Hotel</h2>

</div>

<div class="col-lg-1">
    <a class="btn btn-success" href="{{ url('hotel/create') }}">Ajouter</a>
</div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif



<table class="table table-bordered">

<tr>

    <th>name_hotel</th>
    <th>description</th>
    <th>name_room</th>
    <th>price</th>
    <th>number_bed</th>
    <th>max_adult</th>
    <th>max_child</th>
    <th>attributes</th>
    <th>statut</th>
    
    
</tr>

@foreach ($hotel as $hotel)

    <tr>
       
        <td>{{ $hotel->name_hotel }}</td>
        <td>{{ $hotel->description}}</td>
        <td>{{ $hotel->name_room }}</td>
        <td>{{ $hotel->price }}</td>
        <td>{{ $hotel->number_bed}}</td>
        <td>{{ $hotel-> max_adult}}</td>
        <td>{{ $hotel-> max_child }}</td>
        <td>{{ $hotel-> attributes }}</td>
        <td>
            @if($hotel->statut==1)
                     Disponible
             @else
                     Non Disponible
             @endif    
                        
                        
                        
        </td>
        
        
        <td>

                    <form action="{{route('hotel.destroy', $hotel ) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

                <td><a class="btn btn-primary" href="{{ route('hotel.edit', $hotel ) }}">Modifier</a></td>

                <td><a class="btn btn-primary" href="{{ route('hotel.show', $hotel ) }}">Voir</a></td>
    </tr>

@endforeach
</table>

        </div>

    </body>

</html>

    