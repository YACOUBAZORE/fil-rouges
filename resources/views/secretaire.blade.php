@extends('master.app')
@section('content')



<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Components</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Formulaire d'insciption Secretaire</h4>
              <form class="form-horizontal style-form" method="get">
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nom">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Prenom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Prenom">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mot de pass</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Mot de pass">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Confirmer mot de pass</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Confirmer mot de pass">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Numero</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Numero">
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