@extends('layouts.layout')
@section('header')
    Supprimer cet utilisateur
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Supprimer un utilisateur</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.destroy', $user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <div class="col-md-16 col-md-offset-16">
                                <button id="buttona" type="submit" class="btn btn-warning"">Supprimer l'utilisateur {{ $user->name }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-content')
<script>
    $( document ).ready(function() {
    $('#buttona').click(function(){
      //      document.write(99);
    swal("Utilisateur supprimé", "", "success");
    });
    });
</script>
@endsection