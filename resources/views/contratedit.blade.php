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
              <form class="form-horizontal style-form" method="POST" action="{{ route('contrat.index') }}" >
             
              <form  method="POST" action="{{ route('contrat.update',$contrats->id) }}">
            @csrf
            @method('PUT')

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Contrat</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="contrat" name="contrat" value="{{$contrats->contrat}}" />
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
    @endsection