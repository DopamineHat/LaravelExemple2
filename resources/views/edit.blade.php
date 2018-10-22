@extends('layouts.layout')
@section('header')
    Editer cet utilisateur
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Modifier un utilisateur</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.update', $user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Credits</label>
            <!--                <div class="col-md-6">
                                <input id="credit" type="number" min="0" step="10" class="form-control" name="credit" value="{{ $user->credit }}" required>
                            </div> -->
                            <div class="slidecontainer">
                                <input type="range" min="0" max="1000" value="{{ $user->credit }}" step="10" class="form-control" id="credit" name="credit" required>
                                <span id="demo"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                    <!--            <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button> -->
                                <button id="buttona" type="submit" class="btn btn-success">Enregistrer</button>
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
    $('#buttona').click(function(c){
    c.preventDefault();
      //      document.write(99);
    swal("Informations editées", "", "success");
    });
    });
    var slider = document.getElementById("credit");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>
@endsection