@extends('layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="offset-2 col-8 mt-5">
            <h1 style="text-align:center;">
                Cadastro de Cliente
            </h1>
          
            @if($sucesso==true)
                <div class="alert alert-success">
                    <p class="h3">
                        Cadastro realizado com sucesso
                    </p>
                </div>
            @endif
            <form action="{{route('client_store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="" class="label-control">Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="col-6">
                        <label for="" class="label-control">Endereço</label>
                        <input type="text" class="form-control" name="endereco">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="" class="label-control">Número</label>
                        <input type="text" class="form-control" name="numero">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Complemento</label>
                        <input type="text" class="form-control" name="complemento">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Bairro</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="" class="label-control">Cidade</label>
                        <input type="text" class="form-control" name="cidade">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Estado</label>
                        <select class="form-control" name="estado">
                            <option class="form-control" value="al">Alagoas</option>
                            <option class="form-control" value="pe">Pernambuco</option>
                            <option class="form-control" value="rn">Rio Grande do Norte</option>
                            <option class="form-control" value="pi">Piaui</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">CEP</label>
                        <input type="text" class="form-control" name="cep">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <label for="" class="label-control">CPF</label>
                        <input type="text" class="form-control" name="cpf">
                    </div>
                    <div class="col-3">
                        <label for="" class="label-control">Identidade</label>
                        <input type="text" class="form-control" name="identidade">
                    </div>
                    <div class="col-3">
                        <label for="" class="label-control">Telefones</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>
                    <div class="col-3">
                        <label for="" class="label-control">Celular</label>
                        <input type="text" class="form-control" name="celular">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="" class="label-control">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Site na Internet</label> 
                        <input type="text" class="form-control" name="site">    
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Data de Nascimento</label> 
                        <input type="date" class="form-control" name="nascimento">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="" class="label-control">Vendedor</label>
                        <select class="form-control" name="estado">
                            <option class="form-control" value="x">x</option>
                            <option class="form-control" value="y">y</option>
                            <option class="form-control" value="z">z</option>
                        </select>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-end">
                        <button class="btn btn-outline-dark">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>     
        </div>
    </div>
    
@endsection