@extends('layouts/admin')
@section('conteudo')
    <h1 style="text-align:center;">
        Abertura de Sistema
    </h1>
    @foreach($clients as $c)
        {{$c->nome}}
    @endforeach
    <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
@endsection