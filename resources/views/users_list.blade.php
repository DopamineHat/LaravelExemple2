@extends('layouts.layout')
@section('header')
    Liste des utilisateurs
@endsection
@section('content')
<div class="row py-lg-5 pt-md-5 pt-3 d-flex justify-content-center">
    <div class="card col-lg-3 col-md-6 border-0">
        <div class="card-body bg-light">
            <p class="card-text mb-3 ">
                <h5> Liste des utilisateurs </h5>
                @foreach ($users as $user)
                     <br /> {{$user->name}}
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection