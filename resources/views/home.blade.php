@extends('layouts.layout')
@section('header')
    Exercice
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="primary">
              <div class="container">
                
                <h2><br />Statistiques<br /></h2>
                <p>Statistique des utilisateurs</p>

                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                        <div class="statistic">
                        <div class="primary">
                          <div class="value">{{ $count }}</div>
                          <div class="label">Nombre d utilisateurs</div>
                        </div><!-- /.statistic -->
                        </div>
                        </div>
                      </div><!-- /.col -->

                      <div class="col-sm-6">
                        <div class="statistic">
                        <div class="warning">
                          <div class="label">Total des crédits</div>
                          <div class="value">{{ $total }}</div>
                        </div>
                        </div><!-- /.statistic -->
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="statistic">
                        <div class="success">
                          <div class="value">{{ $admincount }}</div>
                          <div class="label">Nombre d administrateurs</div>
                        </div>
                        </div><!-- /.statistic -->
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                        <div class="card">
                        <div class="statistic">
                        <div class="danger">
                          <div class="label">Nombre de membres</div>
                          <div class="value">{{ $membercount }}</div>
                        </div>
                        </div><!-- /.statistic -->
                      </div><!-- /.col -->
                    </div>
                  </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
