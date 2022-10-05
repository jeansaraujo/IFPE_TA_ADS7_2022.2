@extends('layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="offset-2 col-8 mt-5">
            <h1 style="text-align:center;">
                Deletar cliente
            </h1>
    
            <form action="{{route('client_softDel', $client->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6 d-flex justify-content-center align-items-end">
                    <div class="col-4">
                        <label for="">Tem certeza que deseja excluir este cliente?</label>
                        <button id="cadastrar" class="btn btn-outline-dark">
                            Deletar
                        </button>
                    </div>
                    </div>
                </div>
            </form>     
        </div>
    </div>