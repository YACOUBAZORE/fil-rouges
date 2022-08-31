@extends('master.app')
@section('content')



<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> ESI University</h3>

        @if(session()->has("success"))
        <div class="alert alert-sucess">
            {{session()->get('success')}}
            </div>
        @endif
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Formulaire d'insciption etudiant</h4>
              <form class="form-horizontal style-form" method="POST" action="{{ route('etudiant.store') }}" >
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
                  <select class="form-control" aria-label="Default select example" name="filiere_id">
                <option selected>Choisir une filiere</option>

                @foreach ($filieres as $filieres)
                 <option value="{{$filieres->id}}">{{$filieres->nom_filiere}}</option>
                 @endforeach
             </select>                
              </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Annee academique</label>
                  <div class="col-sm-10">
                  <select class="form-control" aria-label="Default select example" name="annee_id">
                <option selected>Choisir une Annee academique</option>

                @foreach ($annees as $annee)
                 <option value="{{$annee->id}}">{{$annee->annee_academique}}</option>
                 @endforeach
             </select>             
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Niveau etude</label>
                  <div class="col-sm-10">
                  <select class="form-control" aria-label="Default select example" name="level_id">
                <option selected>Choisir le Niveau</option>

                @foreach ($levels as $level)
                 <option value="{{$level->id}}">{{$level->level}}</option>
                 @endforeach
             </select>                 
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
                <label for="firstname" class="control-label col-lg-2">statut_id</label>
                <div class="col-lg-10">
                
                <select class="form-control" aria-label="Default select example" name="statut_id">
                <option selected>Choisir statut</option>

                @foreach ($statuts as $statut)
                 <option value="{{$statut->id}}">{{$statut->statut}}</option>
                 @endforeach
             </select>

            </div>
            </div>
                <div class="form-group">                
                <label for="firstname" class="control-label col-lg-2">Entreprise</label>
                <div class="col-lg-10">
                
                <select class="form-control" aria-label="Default select example" name="entreprise_id">
                <option selected>Choisir une entreprise</option>

                @foreach ($entreprises as $entreprise)
                 <option value="{{$entreprise->id}}">{{$entreprise->nom}}</option>
                 @endforeach
             </select>

            </div>
            </div>
            <div class="form-group">                
                <label for="firstname" class="control-label col-lg-2">Contrat</label>
                <div class="col-lg-10">
                <select class="form-control" aria-label="Default select example" name="contrat_id">
                <option selected>Choisir type de contrat</option>

                @foreach ($contrats as $contrat)
                 <option value="{{$contrat->id}}">{{$contrat->contrat}}</option>
                 @endforeach
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

        <!-- recuperation de liste-->

  <div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">filiere</th>
            <th scope="col">annee_academique</th>
            <th scope="col">niveau_etude</th>
            <th scope="col">moyenne_1er_semestre</th>
            <th scope="col">moyenne_2e_semestre</th>
            <th scope="col">statut</th>
            <th scope="col">entreprise</th>
            <th scope="col">contrat</th>
            <th scope="col">email</th>
            <th scope="col">numero</th>
            <th scope="col">created_at</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->filiere->nom_filiere}}</td>
            <td>{{$etudiant->annee->annee_academique}}</td>
            <td>{{$etudiant->level->level}}</td>
            <td>{{$etudiant->moyenne_1er_semestre}}</td>
            <td>{{$etudiant->moyenne_2e_semestre}}</td>
            <td>{{$etudiant->statut->statut}}</td>
            <td>{{$etudiant->entreprise->nom}}</td>
            <td>{{$etudiant->contrat->contrat}}</td>
            <td>{{$etudiant->email}}</td>
            <td>{{$etudiant->numero}}</td>
            <td>{{$etudiant->created_at}}</td>
            <td>
                <a href="" class="btn btn-info">Editer</a>
                <a href="" class="btn btn-danger" onclick="">Suprimer</a>

                <form id="" action="" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>
        </div>
        
       
    @endsection