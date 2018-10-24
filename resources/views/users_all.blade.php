@extends('layouts.layout')
@section('header')
	Informations sur les Utilisateurs
@endsection
@section('content')
   @foreach ($users as $user)
<div class="row py-lg-5 pt-md-5 pt-3 d-flex justify-content-center">
        <div class="card col-lg-3 col-md-6 border-0">
            <div class="card-body bg-light">
                <div class="card-img-top pt-3">
                    <h5 class=" card-title">nom: {{$user->name}}</h5>
                </div>
                <p class="card-text mb-3 ">
                    id: {{$user->id}} <br />
                    email: {{$user->email}}
                </p>
            </div>
        </div>
</div>
@endforeach
@endsection