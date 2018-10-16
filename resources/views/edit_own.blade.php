@extends('layouts.layout')
@section('header')
    Editer mes informations
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Modifier un utilisateur</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('update_own', $user->id) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-8 control-label">Nom</label>
                            <div class="col-md-16">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-8 control-label">E-Mail</label>
                            <div class="col-md-16">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-16 col-md-offset-16">
                                <button id="buttona" type="submit" class="btn btn-success"">Enregistrer</button>
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
    swal("Informations editées", "", "success");
    });
    });
</script>
@endsection