@extends('/layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="col-12 mt-3">
            <h1 style="text-align:center;">
                Cadastro de Fornecedor
            </h1>
            <hr>          
            @if($sucesso==true)
                <div class="alert alert-success">
                    <p class="h3">
                        Cadastro realizado com sucesso
                    </p>
                </div>
            @endif
        </div>
    </div>
    <form action="{{route('client_store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="" class="label-control">Empresa</label>
                <input type="text" id="empresa" class="form-control" name="empresa">
            </div>
            <div class="col-6">
                <label for="" class="label-control">Contato</label>
                <input type="text" id="contato" class="form-control" name="contato">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <label for="" class="label-control">Endereço</label>
                <input type="text" id="endereco" class="form-control" name="endereco">
            </div>
            <div class="col-12 col-md-4">
                <label for="" class="label-control">Bairro</label>
                <input type="text" id="bairro" class="form-control" name="bairro">
            </div>
            <div class="col-12 col-md-4">
                <label for="" class="label-control">Cidade</label>
                <input type="text" id="cidade" class="form-control" name="cidade">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <label for="" class="label-control">Cidade</label>
                <input type="text" id="cidade" class="form-control" name="cidade">
            </div>
            <div class="col-12 col-md-4">
                <label for="" class="label-control">Estado</label>
                <select class="form-control" name="estado">
                    <option class="form-control" value="al">Alagoas</option>
                    <option class="form-control" value="pe">Pernambuco</option>
                    <option class="form-control" value="rn">Rio Grande do Norte</option>
                    <option class="form-control" value="pi">Piaui</option>
                </select>
            </div>
            <div class="col-12 col-md-4">
                <label for="" class="label-control">CEP</label>
                <input type="text" id="cep" class="form-control" name="cep">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="" class="label-control">Telefones</label>
                <input type="text" id="telefones" class="form-control" name="cpf">
            </div>
            <div class="col-3">
                <label for="" class="label-control">Email</label>
                <input type="text" id="email" class="form-control" name="email">
            </div>
            <div class="col-3">
                <label for="" class="label-control">CNPJ</label>
                <input type="text" id="cnpj" class="form-control" name="cnpj">
            </div>
            <div class="col-3">
                <label for="" class="label-control">Celular</label>
                <input type="text" id="celular" class="form-control" name="celular">
            </div>
        </div>        
        <div class="row">
            <div class="col-12">
                <label for="" class="label-control">Observações</label>
                <input type="text" id="observacao" class="form-control" name="observacao">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="" class="label-control">E-mail</label>
                <input type="email" id="email" class="form-control" name="email">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-end">
                <button id="cadastrar" class="btn btn-outline-dark">
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
@endsection