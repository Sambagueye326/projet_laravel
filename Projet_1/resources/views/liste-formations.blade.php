
@extends('navbar')

@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header ">
                <center>
                    <h3>La liste des Formations</h3>
                </center>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><center>ID</center></th>
                            <th scope="col"><center>Nom</center></th>
                            <th scope="col"><center>Durée</center></th>
                            <th scope="col"><center>Coût</center></th>
                            <th scope="col"><center>Options</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($formation as $l)
                        <tr>
                            <th scope="row"><center>{{$l->id}}</center></th>
                            <td><center>{{$l->nom}}</center></td>
                            <td><center>{{$l->duree}}</center></td>
                            <td><center>{{number_format($l->cout)}}</center></td>
                            <td>
                                <center>
                                    <a class="btn btn-primary mb">Modifier</a>
                                    <a class="btn btn-danger ">Supprimer</a>
                                </center>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
