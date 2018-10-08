@extends('layouts.app')
@section('header')
	Informations sur les Utilisateurs
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
    			@foreach ($users as $user)
    			id: {{$user->id}} <br />
    			nom: {{$user->name}} <br />
    			email: {{$user->email}} <br />
    			@endforeach
            </div>
        </div>
    </div>
</div>
@endsection