@extends('layouts.master')
@section('content')

<div class="container">
  <h2>Nouveau stage</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Des problèmes ont été détectés.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <form  action="{{ route('stage.create') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Date du début -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="dateDebut">Date du début :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dateDebut" placeholder="Saisir la date du début du stage" name="dateDebut">
      </div>
    </div>

    <!-- Date de fin -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="dateFin">Date de fin :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dateFin" placeholder="Saisir la date de fin du stage" name="dateFin">
      </div>
    </div>

    <!-- Avis -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="avis">Avis :</label> 
      <div class="col-sm-10">      
        <input type="text" class="form-control" id="avis" placeholder="Saisir un avis" name="avis">
      </div>
    </div>

    <!-- Année scolaire -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="anneeScolaire">Année scolaire :</label>  
      <div class="col-sm-10">    
        <input type="text" class="form-control" id="anneeScolaire" placeholder="Saisir l'année scolaire" name="anneeScolaire">
      </div>
    </div>

    <!-- Etat de l'avancement de la signature -->
    <div class="form-group">        
      <label class="control-label col-sm-4" for="etatSignature">Etat de l'avancement de la signature :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="etatSignature" placeholder="Saisir l'état de l'avancement de la signature" name="etatSignature">
      </div>
    </div>

    <!-- bouton valider et annuler -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default btn-primary">
            <span class="glyphicon glyphicon-ok">
                Valider
            </span>
        </button>
          
        <button type="button" class="btn btn-default btn-primary"
                onclick="javascript:if(confirm()'Vous êtes certain ?'))
                window.location='{{ url('/') }}';">
            <span class="glyphicon glyphicon-remove">
                Annuler
            </span>
        </button>
      </div>
    </div>

  </form>

</div>

@endsection
