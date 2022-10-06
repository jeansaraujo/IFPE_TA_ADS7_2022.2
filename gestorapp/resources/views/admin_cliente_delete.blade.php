@extends('layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="col-12 mt-3">
            <h1 style="text-align:center;">
                Deletar cliente
            </h1>
    </div>
    <hr>
    <form action="{{route('client_softDel', $client->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 text-center">
                <label class="mb-5">Tem certeza que deseja excluir este cliente?</label>
                <br>
                <button id="cadastrar" class="btn btn-outline-danger">
                    Deletar
                </button>
            </div>
        </div>
    </form>
@endsection  