@extends('/layouts/admin')
@section('conteudo')
    <div class="row">
        <div class="col-12 mt-5">
            <h1 style="text-align:center;">
                Listagem de Fornecedor
            </h1>
            <form action="" method="GET">
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
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </div>
@endsection