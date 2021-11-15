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

  <form  action="{{ route('entreprises.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="nomEntreprise">Nom de l'entreprise:</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="nomEntreprise" placeholder="Saisir le nom de l'entreprise" name="nomEntreprise">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="chef">Chef de l'établissement:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="chef" placeholder="Saisir le nom et prénom" name="chef">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="centreActivite">Centre d'activité:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="centreActivite" placeholder="Saisir le centre d'activité" name="centreActivite">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="emplacement">Emplacement géographique:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="emplacement" placeholder="Saisir l'emplacement" name="emplacement">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mail">Contact mail:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="mail" placeholder="Saisir l'adresse email'" name="mail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="telephone">Contact telephone:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="telephone" placeholder="Saisir le numéro de téléphone'" name="telephone">
      </div>
    </div>

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
