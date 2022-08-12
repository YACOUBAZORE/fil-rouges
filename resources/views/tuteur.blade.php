@extends('master.app')
@section('content')



<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> ADMINISTRATEUR</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Formulaire d'insciption Tuteur</h4>
              <form class="form-horizontal style-form" method="POST" action="{{ route('Ajout') }}" >
              @csrf
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">nom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nom" name="nom" />
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">prenom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Prenom"  name="prenom"/>
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Email" name="email"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">numero</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Numero" name="numero"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">mot_pass</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Mot de pass"  name="mot_pass"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">confirmer_mot_pass</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Confirmer mot de pass" name="confirmer_mot_pass">
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
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">numero</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tuteurs as $tuteurs)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$tuteurs->nom}}</td>
            <td>{{$tuteurs->prenom}}</td>
            <td>{{$tuteurs->email}}</td>
            <td>{{$tuteurs->numero}}</td>
            <td>{{$tuteurs->created_at}}</td>
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