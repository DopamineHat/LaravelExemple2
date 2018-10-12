@extends('layouts.layout')
@section('header')
	Mes informations
@endsection
@section('content')
<div class="row py-lg-5 pt-md-5 pt-3 d-flex justify-content-center">
    <div class="card col-lg-3 col-md-6 border-0">
        <div class="card-body bg-light">
            <div class="card-img-top pt-3">
                <h5 class=" card-title">nom: {{$user->name}}</h5>
            </div>
            <p class="card-text mb-3 ">
                id: {{$user->id}} <br />
                email: {{$user->email}} <br />
                adresse: {{$user->address}} <br />
                ville: {{$user->city}} <br />
                code postal: {{$user->postal}} <br />
                status: {{$user->type}} <br />
                credits: {{$user->credit}} <br />
            </p>
        </div>
    </div>
</div>
@if ($user->credit > 9)
    <h1> Vous avez assez de credits pour profiter pleinement de notre offre 😃 </h1>
@else
    <h1> Pensez à recharger vos credits 😢 </h1>
@endif
@endsection