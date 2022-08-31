@extends('master.app')
@section('content')
<?php
dump('entreprise')
?>
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> ADMINISTRATEUR</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Formulaire d'insciption Entreprise</h4>
              @if(isset($entreprise))
              <form  method="POST" actiion="">
                @methode("PUT")
                @else
              <form class="form-horizontal style-form" method="POST" action="" >
             @endif
              @csrf
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">nom</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{$entreprise->nom}}" />
                  </div>
                </div>
              
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{$entreprise->email}}" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">mot_pass</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Mot de pass" name="mot_pass"       />           
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">confirmer_mot_pass</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Confirmer mot de pass" name="confirmer_mot_pass"  />
                  </div>
                </div>
                <button type="submit" class="btn btn-theme">Update</button>

</form>
</div>
</div>
<!-- col-lg-12-->
</div>
<!-- /row -->
