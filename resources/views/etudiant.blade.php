@extends('master.app')
@section('content')



<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> ESI University</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Formulaire d'insciption etudiant</h4>
              <form class="form-horizontal style-form" method="POST" action="{{ route('Ajout2') }}" >
              @csrf
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nom" name="nom" />
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Prenom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Prenom" name="prenom" />
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Filiere</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Filiere" name="nom_filiere" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Annee academique</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Annee academique"name="annee_academique" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Niveau etude</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Niveau etude" name="niveau_etude" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Moyenne 1er semestre</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Moyenne 1er semestre" name="moyenne_1er_semestre" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Moyenne 2e semestre</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Moyenne 2e semestre" name="moyenne_2e_semestre" />
                  </div>
                </div>
                <div class="form-group">                
                <label for="firstname" class="control-label col-lg-2">Statut</label>
                <div class="col-lg-10">
                
                <select class="form-control" aria-label="Default select example" name="statut">
              <option selected>Choisir le statut</option>
            <option value="Admin">Stagiaire</option>
            <option value="Secretaire">Employe</option>
            </select>

            </div>
            </div>
                <div class="form-group">                
                <label for="firstname" class="control-label col-lg-2">Entreprise</label>
                <div class="col-lg-10">
                
                <select class="form-control" aria-label="Default select example" name="entreprise">
                <option selected>Choisir une entreprise</option>
                 <option value="Admin">CoriBank</option>
               <option value="Secretaire">IB Bank</option>
             </select>

            </div>
            </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Email" name="email" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Numero</label>
                  <div class="col-sm-10">
                    <input type="Number" class="form-control" placeholder="Numero" name="numero" />
                  </div>
                </div>
                <button type="submit" class="btn btn-theme">Sign in</button>

              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        
       
    @endsection