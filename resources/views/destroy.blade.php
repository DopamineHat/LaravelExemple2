@extends('layouts.app')
@section('header')
    Supprimer cet utilisateur
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Supprimer un utilisateur</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.destroy', $user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" id="buttona" class="btn btn-primary">
                                    Supprimer l'utilisateur {{ $user->name }}
                                </button>
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