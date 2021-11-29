@extends('layouts.master')
@section('content')

<div class="container">
  <h2>Nouvelle entreprise</h2>

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

  <form  action="{{ route('entreprises.create') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Nom de l'entreprise -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="nomEntreprise">Nom de l'entreprise :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nomEntreprise" placeholder="Saisir le nom de l'entreprise" name="nomEntreprise">
      </div>
    </div>

    <!-- Contact téléphone -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="telephone">Contact téléphone :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telephone" placeholder="Saisir le numéro de téléphone" name="telephone">
      </div>
    </div>

    <!-- Contact mail -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="mail">Contact mail :</label> 
      <div class="col-sm-10">      
        <input type="text" class="form-control" id="mail" placeholder="Saisir l'adresse email" name="mail">
      </div>
    </div>

    <!-- Site Web -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="siteWeb">Site Web :</label>  
      <div class="col-sm-10">    
        <input type="text" class="form-control" id="siteWeb" placeholder="Saisir l'adresse du site Web" name="siteWeb">
      </div>
    </div>

    <!-- Secteur d'activité -->
    <div class="form-group">        
      <label class="control-label col-sm-3" for="secteurActivite">Secteur d'activité :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="secteurActivite" placeholder="Saisir le secteur d'activité" name="secteurActivite">
      </div>
    </div>

    <!-- Adresse postale -->
    <div class="form-group">  
      <label class="control-label col-sm-3" for="adresse">Adresse postale :</label>       
      <div class="col-sm-10">
        <input type="text" class="form-control" id="adresse" placeholder="Saisir l'adresse postale" name="adresse">
      </div>
    </div>

    <!-- Code postal et Ville en ligne -->
    <div class="form-row">
      <!-- Code postal -->
        <div class="form-group col-sm-5"> 
          <label class="control-label col-sm-5" for="codePostal">Code postal :</label>         
          <input type="text" class="form-control" id="codePostal" placeholder="Saisir le code postal" name="codePostal">
        </div>

      <!-- Ville -->
        <div class="form-group col-sm-5">  
          <label class="control-label col-sm-5" for="ville">Ville :</label>        
          <input type="text" class="form-control" id="ville" placeholder="Saisir la ville" name="ville">
        </div>
    </div>

    <!-- Numéro SIRET -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="numSiret">Numéro SIRET :</label>     
      <div class="col-sm-10">   
        <input type="text" class="form-control" id="numSiret" placeholder="Saisir le Numéro SIRET" name="numSiret">
      </div>
    </div>

    <!-- Code APE -->
    <div class="form-group">
      <label class="control-label col-sm-3" for="codeApe">Code APE :</label>    
      <div class="col-sm-10">       
        <input type="text" class="form-control" id="codeApe" placeholder="Saisir le code APE" name="codeApe">
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
