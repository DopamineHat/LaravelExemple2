@extends('layouts.app')
@section('header')
    Liste des utilisateurs
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
    			@foreach ($users as $user)
    			     {{$user->name}} <br />
    			@endforeach
            </div>
        </div>
    </div>
</div>
@endsection