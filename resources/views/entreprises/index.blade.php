@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion des employés</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employe.create') }}"> Nouvel employé</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('ok'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Civilite</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Profil</th>
            <th>Intérêt</th>
        </tr>
    @foreach ($employes as $employe)
    <tr>
        <td>{{ $employe->id}}</td>
        <td>{{ $employe->civilite}}</td>
        <td>{{ $employe->nom}}</td>
        <td>{{ $employe->prenom}}</td>
        <td>{{ $employe->profil}}</td>
        <td>{{ $employe->interet}}</td>
        <td>

            <form action="{{ route('employe.destroy',$employe->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('employe.show',$employe->id) }}">Voir</a>
                <a class="btn btn-primary" href="{{ route('employe.edit',$employe->id) }}">Editer</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        </td>
    </tr>
    @endforeach
    </table>
    <div class="d-felx justify-content-center">
        {{ $employes->links('pagination::bootstrap-4') }}
    </div>
           

@endsection

