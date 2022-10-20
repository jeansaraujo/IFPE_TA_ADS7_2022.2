@extends('/layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="col-12 mt-3">
            <h1 style="text-align:center;">
                Cadastro de Produto
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
    <form action="{{route('product_store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="" class="label-control">Nome do Produto</label>
                <input type="text" id="nome" class="form-control" name="nome">
            </div>
            <div class="col-6">
                <label for="" class="label-control">Setor</label>
                <input type="text" id="setor" class="form-control" name="endereco">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="" class="label-control">Fabricante</label>
                <input type="text" id="fabricante" class="form-control" name="fabricante">
            </div>
            <div class="col-4">
                <label for="" class="label-control">Fornecedor</label>
                <input type="text" id="fornecedor" class="form-control" name="fornecedor">
            </div>
            <div class="col-4">
                <label for="" class="label-control">Preço de Custo</label>
                <input type="text" id="custo" class="form-control" name="custo">
            </div>
        </div>
    
        <div class="row">
            <div class="col-4">
                <label for="" class="label-control">Margem de Lucro</label>
                <input type="text" id="margemLucro" class="form-control" name="margemLucro">
            </div>
            <div class="col-4">
                <label for="" class="label-control">Estoque Mínimo</label>
                <input type="text" id="estoqueMinimo" class="form-control" name="estoqueMinimo">
            </div>
            <div class="col-4">
                <label for="" class="label-control">Estoque Atual</label>
                <input type="text" id="estoqueAtual" class="form-control" name="estoqueAtual">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="" class="label-control">Unidade</label>
                <input type="text" id="unidade" class="form-control" name="unidade">
            </div>
            <div class="col-4">
                <label for="" class="label-control">Último ultimoReajuste</label>
                <input type="text" id="ultimoReajuste" class="form-control" name="ultimoReajuste">
            </div>
            <div class="col-4">
                <label for="" class="label-control">Observação</label>
                <input type="text" id="observacao" class="form-control" name="observacao">
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-4 d-flex justify-content-end align-items-end">
                <button id="cadastrar" class="btn btn-outline-dark">
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
@endsection
    