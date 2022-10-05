@extends('layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="offset-2 col-8 mt-5">
            <h1 style="text-align:center;">
                Edição de cliente
            </h1>
          
            <form action="{{route('client_edit', $client->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="" class="label-control">Nome</label>
                        <input type="text" class="form-control" name="nome" value="{{ $client->nome }}">
                    </div>
                    <div class="col-6">
                        <label for="" class="label-control">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="{{ $client->endereco }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="" class="label-control">Número</label>
                        <input type="text" class="form-control" name="numero" value="{{ $client->numero }}">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Complemento</label>
                        <input type="text" class="form-control" name="complemento" value="{{ $client->complemento }}">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Bairro</label>
                        <input type="text" class="form-control" name="bairro" value="{{ $client->bairro }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="" class="label-control">Cidade</label>
                        <input type="text" class="form-control" name="cidade" value="{{ $client->cidade }}">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Estado</label>
                        <select class="form-control" name="estado" value="{{ $client->estado }}">
                            <option class="form-control" value="al">Alagoas</option>
                            <option class="form-control" value="pe">Pernambuco</option>
                            <option class="form-control" value="rn">Rio Grande do Norte</option>
                            <option class="form-control" value="pi">Piaui</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">CEP</label>
                        <input type="text" class="form-control" name="cep" value="{{ $client->cep }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <label for="" class="label-control">CPF</label>
                        <input type="text" class="form-control" name="cpf" value="{{ $client->cpf }}">
                    </div>
                    <div class="col-3">
                        <label for="" class="label-control">Identidade</label>
                        <input type="text" class="form-control" name="identidade" value="{{ $client->identidade }}">
                    </div>
                    <div class="col-3">
                        <label for="" class="label-control">Telefones</label>
                        <input type="text" class="form-control" name="telefone" value="{{ $client->telefone }}">
                    </div>
                    <div class="col-3">
                        <label for="" class="label-control">Celular</label>
                        <input type="text" class="form-control" name="celular" value="{{ $client->celular }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="" class="label-control">E-mail</label>
                        <input type="email" class="form-control" name="email" value="{{ $client->email }}">
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Site na Internet</label> 
                        <input type="text" class="form-control" name="site" value="{{ $client->site }}">    
                    </div>
                    <div class="col-4">
                        <label for="" class="label-control">Data de Nascimento</label> 
                        <input type="date" class="form-control" name="nascimento" value="{{ $client->nascimento }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="" class="label-control" value="{{ $client->vendedor }}">Vendedor</label>
                        <select class="form-control" name="estado">
                            <option class="form-control" value="x">x</option>
                            <option class="form-control" value="y">y</option>
                            <option class="form-control" value="z">z</option>
                        </select>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-end">
                        <button id="cadastrar" class="btn btn-outline-dark">
                            Atualizar
                        </button>
                    </div>
                </div>
            </form>     
        </div>
    </div>