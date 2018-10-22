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
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                        <div class="statistic">
                        <div class="primary">
                          <div class="value">{{ $usercount }}</div>
                          <div class="label">Nombre d' utilisateurs</div>
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
                          <div class="label">Nombre d' administrateurs</div>
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
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                        <div class="statistic">
                        <div class="info">
                          <div class="label">Crédits moyen</div>
                          <div class="value">{{ $avgcredit }}</div>
                        </div>
                        </div><!-- /.statistic -->
                        </div>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                        <div class="statistic">
                        <div class="success">
                          <div class="value">{{ $peradmin }} %</div>
                          <div class="label">Pourcentage d' administrateurs</div>
                        </div>
                        </div><!-- /.statistic -->
                      </div><!-- /.col -->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="statistic">
                        <div class="warning">
                          <div class="value">{{ $richuser }}</div>
                          <div class="label">Balance la plus élevée</div>
                        </div>
                        </div><!-- /.statistic -->
                      </div>
                      <div class="col-sm-6">
                        <div class="card">
                        <div class="statistic">
                        <div class="danger">
                          <div class="value">{{ $cntpoor }}</div>
                          <div class="label">Membres avec trop peu de crédits</div>
                        </div>
                        </div>
                        </div><!-- /.statistic -->
                      </div>
                    </div>
                  </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
