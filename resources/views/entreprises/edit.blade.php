@php
  $values = explode(",", $employe->interet);
@endphp

@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier un employé</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employe.index') }}"> Retour</a>
            </div>
        </div>
    </div>

<div class="container">
  
  <form method="POST" action="{{ route('employe.update',$employe->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label class="control-label col-sm-2" for="nom">Civilité:</label>
    <label class="radio-inline">
      <input type="radio" name="civilite" value="Mme"  @if($employe->civilite == 'Mme') checked @endif>Madame
    </label>
    <label class="radio-inline">
      <input type="radio" name="civilite" value="Mle" @if($employe->civilite == 'Mle') checked @endif>Mademoiselle
    </label>
    <label class="radio-inline">
      <input type="radio" name="civilite" value="M" @if($employe->civilite == 'M') checked @endif>Monsieur
    </label>  
  </div>  
    <div class="form-group">
      <label class="control-label col-sm-2" for="nom" >Nom:</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="nom" placeholder="Saisir le nom" name="nom" value="{{ $employe->nom }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenom" >Prénom:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="prenom" placeholder="Saisir le prénom" name="prenom" value="{{ $employe->prenom }}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" >Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="{{ $employe->pwd }}">
   
      </div>
    </div>
     
    <div class="form-group">
      <label class="control-label" >Profil:</label>

        <div class="form-group">
         <label for="sel1">Vous êtes:</label>
         <select class="form-control" id="sel1" name='profil'>
            <option value="parti" @if($employe->profil=="parti") selected @endif>un particulier</option>
            <option value="prof" @if($employe->profil=="prof") selected @endif>un professionnel</option>
            <option value="instit" @if($employe->profil=="instit") selected @endif>institutionnel</option>
         </select>
        </div> 
      
    <div class="form-group">  
      <label class="control-label" >Quel type de prestation recherchez-vous ?:</label>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="interet[]" value="loc" @if(in_array("loc", $values)) checked @endif> Location de mobilier</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="interet[]" value="achat" @if(in_array("achat", $values)) checked @endif> Achat de mobilier</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default btn-primary">
            <span class="glyphicon glyphicon-ok">
                Modifier
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

