@extends('layouts.layout')
@section('header')
    Interface
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Em@il</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Status</th>
                        <th>Credits</th>
                        <th class="hidden">QQQQQQQQQQQ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->postal}}</td>
                        <td>{{$user->type}}</td>
                        <td>{{$user->credit}}</td>
                        <td><a class="btn btn-warning" id="buttondt" href="/users/{{$user->id}}/edit">Edit</a>
                        <a class="btn btn-danger" id="buttondt" href="/users/{{$user->id}}/destroy">Suppr</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js-content')
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
@endsection