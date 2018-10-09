@extends('layouts.app')
@section('header')
	Mes informations
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
    			id: {{$user->id}} <br />
    			nom: {{$user->name}} <br />
    			email: {{$user->email}} <br />
                adresse: {{$user->address}} <br />
                ville: {{$user->city}} <br />
                code postal: {{$user->postal}} <br />
                status: {{$user->type}} <br />
                credits: {{$user->credit}} <br />
                @if ($user->credit > 9)
                    <h1> Vous avez assez de credits pour profiter pleinement de notre offre 😃 </h1>
                @else
                    <h1> Pensez à recharger vos credits 😢 </h1>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection