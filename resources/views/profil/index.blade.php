@extends('layouts.master')
@section('content')

<div class="container">
  <h2></h2>

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
    <style type="text/css">
    
    /* CSS Boostrap */ 
    fieldset.scheduler-border {
    border: solid 1px #DDD !important;
    padding: 0 10px 10px 10px;
    border-bottom: none;
    }

    legend.scheduler-border {
        width: auto !important;
        border: none;
        font-size: 14px;
      
    }

    </style>
      <br><br>
      <div class="container">
        <div class="row">

          <div class="col-5">
            <!-- Cadre du profil -->
            <fieldset class="border p-2">
              <legend  class="w-auto"><strong>Profil de Mark Dublon</strong></legend>

                <!-- Lecture Profil -->
                <div class="col-sm-10">

                    <br>
                    <!-- Affichage Nom -->
                    <p class="text-muted"><strong>Nom :</strong> Dublon</p>
                    <!-- Affichage Prénom -->
                    <p class="text-muted"><strong>Prénom :</strong> Mark</p>
                    <!-- Affichage Téléphone -->
                    <p class="text-muted"><strong>Numéro de téléphone :</strong> 07.06.59.48.78</p>
                    <!-- Affichage E-mail -->
                    <p class="text-muted"><strong>Adresse mail :</strong> MarkDublon@gmail.com</p>
                    <!-- Affichage Spécialité -->
                    <p class="text-muted"><strong>Option :</strong> SLAM</p>
                    <br>

                    <!-- Bouton Mofifier Profil -->
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default btn-warning">
                            <span class="glyphicon glyphicon-ok">
                                Modifier
                            </span>
                        </button>
                      </div>
                    </div>

                </div>
                

                <!-- Modifier Profil-->
                <!-- 
                <div class="form-group">
                  <label class="control-label col-sm-7" for="nomUtilisateur">Nom :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomUtilisateur" placeholder="Saisir votre nom" name="nomUtilisateur">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-7" for="prenomUtilisateur">Prénom :</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="prenomUtilisateur" placeholder="Saisir votre prénom" name="prenomUtilisateur">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-7" for="telUtilisateur">Numéro de téléphone :</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="telUtilisateur" placeholder="Saisir votre numéro de téléphone" name="telUtilisateur">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-7" for="emailUtilisateur">Adresse mail :</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="emailUtilisateur" placeholder="Saisir votre adresse mail" name="emailUtilisateur">
                  </div>
                </div>

                <div class="col-sm-6">
                  <p>Spécialité :</p>
                </div>
                <div class="form-check form-check-inline">
                  <div class="col-sm-6">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="speUtilisateur" value="option1">
                  </div>
                  <label class="form-check-label" for="speUtilisateur">SLAM</label>
                </div>
                <div class="form-check form-check-inline">
                  <div class="col-sm-6">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="speUtilisateur" value="option2">
                  </div>
                  <label class="form-check-label" for="speUtilisateur">SISR</label>
                </div>
                <p></p>

                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" class="btn btn-default btn-warning">
                        <span class="glyphicon glyphicon-ok">
                            Modifier
                        </span>
                    </button>
                  </div>
                </div>

                -->

            </fieldset>
          </div>

          <div class="col">
            <!-- Marge entre Profil et Stage -->
          </div>


          <div class="col-6">
            <!-- Cadre Stage 1er Annee -->
            <fieldset class="border p-2">
                <legend  class="w-auto"><strong>Stage première année</strong></legend>

                  <!-- Lecture Stage 1 -->
                    <div class="col-sm-10">

                      <br>
                        <!-- Affichage Nom -->
                        <p class="text-muted"><strong>Nom :</strong> FLCK Corp.</p>
                        <!-- Affichage Secteur d'activité -->
                        <p class="text-muted"><strong>Secteur d'activité :</strong> Développement informatique</p>
                        <!-- Affichage Ville -->
                        <p class="text-muted"><strong>Ville :</strong> Mulhouse</p>
                        <!-- Affichage Site internet -->
                        <p class="text-muted"><strong>Site internet :</strong> FLCK_Corp.fr</p>
                        <!-- Affichage E-mail -->
                        <p class="text-muted"><strong>Adresse mail :</strong> FLCK_Corp@gmail.com</p>
                        <!-- Affichage téléphone -->
                        <p class="text-muted"><strong>Numéro de téléphone :</strong> 07.06.59.48.76</p>
                        <br>

                        <!-- Bouton Mofifier Profil -->
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-default btn-warning">
                                <span class="glyphicon glyphicon-ok">
                                    Modifier
                                </span>
                            </button>
                          </div>
                        </div>

                    </div>

                  <!-- Modif Stage 1 -->
                  <div style="display:none">
                    <div class="col-sm-10">

                      <br>
                      <div class="form-group">
                        <label class="control-label col-sm-7" for="nomEntreprise">Nom :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nomEntreprise" placeholder="Saisir le nom de l'entreprise" name="nomEntreprise">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="secteurActivite">Secteur d'activité :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="secteurActivite" placeholder="Saisir le secteur d'activité" name="secteurActivite">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="ville">Ville :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ville" placeholder="Saisir la ville de l'entreprise" name="ville">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="siteWeb">Site internet :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="siteWeb" placeholder="Saisir le site internet" name="siteWeb">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="email">Adresse e-mail :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" placeholder="Saisir l'adresse e-mail" name="email">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="tel">Numéro de téléphone :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="tel" placeholder="Saisir le numéro de téléphone" name="tel">
                        </div>
                      </div>

                      <!-- Container bouton Stage 1 -->
                      <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                          <!-- Bouton valider saisie Stage 1 -->
                          <button type="button" class="btn btn-success">
                              <span class="glyphicon glyphicon-ok">
                                  Valider
                              </span>
                          </button>
                          <!-- Bouton annuler saisie Stage 1 -->
                          <button type="button" class="btn btn-danger">
                              <span class="glyphicon glyphicon-ok">
                                  Annuler
                              </span>
                          </button>
                        </div>
                      </div>
                      <br>

                    </div>
                  </div>


            </fieldset>

            <!-- Cadre Stage 2eme Annee -->
            <fieldset class="border p-2">
                <legend  class="w-auto"><strong>Stage deuxième année</strong></legend>

                  <!-- Lecture Stage 2 -->
                  <div style="display:none">
                    <div class="col-sm-10">

                      <br>
                        <!-- Affichage Nom -->
                        <p class="text-muted"><strong>Nom :</strong> FLCK Corp.</p>
                        <!-- Affichage Secteur d'activité -->
                        <p class="text-muted"><strong>Secteur d'activité :</strong> Développement informatique</p>
                        <!-- Affichage Ville -->
                        <p class="text-muted"><strong>Ville :</strong> Mulhouse</p>
                        <!-- Affichage Site internet -->
                        <p class="text-muted"><strong>Site internet :</strong> FLCK_Corp.fr</p>
                        <!-- Affichage E-mail -->
                        <p class="text-muted"><strong>Adresse mail :</strong> FLCK_Corp@gmail.com</p>
                        <!-- Affichage téléphone -->
                        <p class="text-muted"><strong>Numéro de téléphone :</strong> 07.06.59.48.76</p>
                        <br>

                        <!-- Bouton Mofifier Stage -->
                        <div class="form-group">        
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-default btn-warning">
                                <span class="glyphicon glyphicon-ok">
                                    Modifier
                                </span>
                            </button>
                          </div>
                        </div>

                    </div>
                  </div>

                  <!-- Modif Stage 2 -->
                    <div class="col-sm-10">

                      <br>
                      <div class="form-group">
                        <label class="control-label col-sm-7" for="nomEntreprise">Nom :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="nomEntreprise" placeholder="Saisir le nom de l'entreprise" name="nomEntreprise">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="secteurActivite">Secteur d'activité :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="secteurActivite" placeholder="Saisir le secteur d'activité" name="secteurActivite">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="ville">Ville :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="ville" placeholder="Saisir la ville de l'entreprise" name="ville">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="siteWeb">Site internet :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="siteWeb" placeholder="Saisir le site internet" name="siteWeb">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="email">Adresse e-mail :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" placeholder="Saisir l'adresse e-mail" name="email">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-7" for="tel">Numéro de téléphone :</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="tel" placeholder="Saisir le numéro de téléphone" name="tel">
                        </div>
                      </div>

                      <!-- Container bouton Stage 2 -->
                      <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                          <!-- Bouton valider saisie Stage 2 -->
                          <button type="button" class="btn btn-success">
                              <span class="glyphicon glyphicon-ok">
                                  Valider
                              </span>
                          </button>
                          <!-- Bouton annuler saisie Stage 2 -->
                          <button type="button" class="btn btn-danger">
                              <span class="glyphicon glyphicon-ok">
                                  Annuler
                              </span>
                          </button>
                        </div>
                      </div>
                      <br>

                    </div>


            </fieldset>
          </div>
          
          <?php 

          global $refresh;
          echo $refresh
          
          ?>

        </div>
      </div>
  </form> 
</div>

@endsection