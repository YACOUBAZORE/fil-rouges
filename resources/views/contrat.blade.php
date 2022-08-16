@extends('master.app')
@section('content')



<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> ESI University</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Formulaire de contrat</h4>
              <form class="form-horizontal style-form" method="POST" action="{{ route('Ajout7') }}" >
              @csrf
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Contrat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Contrat" name="contrat" />
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
            <th scope="col">contrat</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contrats as $contrats)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$contrats->contrat}}</td>
            <td>{{$contrats->created_at}}</td>
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