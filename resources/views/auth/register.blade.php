@extends('master.appi')
@section('content')
<x-guest-layout>
    <x-auth-card>
        

        <!-- Validation Errors -->
        <section id="main-content">
      <section class="wrapper">
      

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
       
        <div class="form">

        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="control-label col-lg-2">nom </label>
                <div class="col-lg-10">
                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                </div>
            </div>

            <!-- First name -->
            <div class="form-group">                
                <label for="firstname" class="control-label col-lg-2">prenom </label>
                <div class="col-lg-10">
                <x-input id="name" class="form-control" type="text" name="prenom" :value="old('prenom')" required autofocus />
                </div>
            </div>

            <div class="form-group">                
                <label for="firstname" class="control-label col-lg-2">role</label>
                <div class="col-lg-10">
                
         <select class="form-control" aria-label="Default select example" name="role">
                  <option selected>Choisir un role</option>
                  <option value="Admin">Admin</option>
                   <option value="Secretaire">Secretaire</option>
        
                </select>

            </div>
            </div>

            <div class="form-group">                
                <label for="email" class="control-label col-lg-2">email </label>
                <div class="col-lg-10">
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>
            </div>
                
            <!-- Password -->
            <div class="form-group">
            <label for="password" class="control-label col-lg-2">password</label>
            <div class="col-lg-10">
            <x-input id="password" class="form-control" type="password" name="password" :value="old('password')" required autofocus />
</div>
</div>
        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password" class="control-label col-lg-2">password_confirmation</label>
            <div class="col-lg-10">
            <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" :value="old('conf_password')" required autofocus />
</div>
</div>

             

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
            </div>
            
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection