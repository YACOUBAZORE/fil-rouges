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
              <form class="form-horizontal style-form" method="POST" action="{{ route('statut.store') }}" >
              @csrf
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Statut</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Statut" name="statut" />
                  </div>
                </div>

                </div>
                <button type="submit" class="btn btn-theme">Save</button>

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
            <th scope="col">statut</th>
            <th scope="col">created_at</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($statuts as $statuts)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$statuts->statut}}</td>
          <td>{{$statuts->created_at}}</td>           
          
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