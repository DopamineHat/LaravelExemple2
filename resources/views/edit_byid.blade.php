@extends('layouts.app')
@section('header')
	Editer un utilisateur par Nom
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Nom
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
				@foreach ($users as $user)
					<li><a href="/users/{{$user->id}}/edit">{{$user->name}}</a></li>
    			@endforeach
				</ul>
			</div> 
            </div>
        </div>
    </div>
</div>
@endsection