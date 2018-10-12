@extends('layouts.layout')
@section('header')
	Editer un utilisateur par Nom
@endsection
@section('content')
<ul class="sidebar-menu">
<li class="treeview">
    <a href="#">
        <i class="fas fa-plus"></i>
        <span>Nom</span>
    </a>
    <ul class="treeview-menu active">
    	@foreach ($users as $user)
        <li>
            <a href="/users/{{$user->id}}/edit">
                {{$user->name}}</a>
        </li>
        @endforeach
    </ul>
</li>
</ul>
@endsection