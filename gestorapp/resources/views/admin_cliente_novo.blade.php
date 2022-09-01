@extends('layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="offset-2 col-8">
        <h1 style="text-align:center;">
            Cadastro de Cliente
        </h1>
        <form action="{{route('client_store')}}" method="POST">
        <label for="" class="label-control">Nome</label>
        <input type="text" class="form-control" name="nome">
        <label for="" class="label-control">Endereço</label>
        <input type="text" class="form-control" name="endereco">
        <label for="" class="label-control">Número</label>
        <input type="text" class="form-control" name="numero">
        <label for="" class="label-control">Complemento</label>
        <input type="text" class="form-control" name="complemento">
        <label for="" class="label-control">Bairro</label>
        <input type="text" class="form-control" name="bairro">
        <label for="" class="label-control">Cidade</label>
        <input type="text" class="form-control" name="cidade">
        <label for="" class="label-control">Estado</label>
        <select class="form-control" name="estado">
            <option class="form-control" value="al">Alagoas</option>
            <option class="form-control" value="pe">Pernambuco</option>
            <option class="form-control" value="rn">Rio Grande do Norte</option>
            <option class="form-control" value="pi">Piaui</option>
        </select>
        <label for="" class="label-control">CEP</label>
        <input type="text" class="form-control" name="cep">
        <label for="" class="label-control">CPF</label>
        <input type="text" class="form-control" name="cpf">
        <label for="" class="label-control">Identidade</label>
        <input type="text" class="form-control" name="identidade">
        <label for="" class="label-control">Telefones</label>
        <input type="text" class="form-control" name="telefone">
        <label for="" class="label-control">Celular</label>
        <input type="text" class="form-control" name="celular">
        <label for="" class="label-control">E-mail</label>
        <input type="text" class="form-control" name="email">
        <label for="" class="label-control">Site na Internet</label> 
        <input type="text" class="form-control" name="site">
        <label for="" class="label-control">Data de Nascimento</label> 
        <input type="text" class="form-control" name="nascimento">
        <label for="" class="label-control">Vendedor</label>
        <select class="form-control" name="estado">
            <option class="form-control" value="x">x</option>
            <option class="form-control" value="y">y</option>
            <option class="form-control" value="z">z</option>
          </select>
        <button class="btn btn-primary">
            Cadastrar
        </button>
    </form>     
        </div>
    </div>
    
@endsection