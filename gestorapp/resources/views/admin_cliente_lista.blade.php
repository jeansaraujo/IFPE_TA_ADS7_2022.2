@extends('layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="offset-2 col-8 mt-5">
            <h1 style="text-align:center;">
                Listagem de Cliente
            </h1>
          
            <form action="{{route('client_search')}}" method="GET">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <input type="text" class="form-control" name="nome" placeholder="Pesquise">
                    </div>
                    <div class="col-4 d-flex justify-content-center align-items-end">
                        <button class="btn btn-outline-dark">
                            Pesquisar
                        </button>
                    </div>
                </div>                
            </form>     
        </div>
        <div class="offset-2 col-8">
            <table class="table text-center">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>Mais Informações</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->nome}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->telefone}}</td>
                            <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection