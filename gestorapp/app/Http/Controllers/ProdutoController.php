<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto as Produto;

class ProdutoController extends Controller
{
    public function product_new(){
        $sucesso = false;       
        return view('admin_produto_novo')->with(compact('sucesso'));       
    }

    public function product_list(){
       $produtos = Client::all();   
        return view('produto_lista')->with(compact('produtos'));        
    }

    public function product_search(Request $request) {
        $produtos = DB::table('produtos')
                    ->where('nome','=',$request->nome)                    
                    ->get(); 
        return view('produto_lista')->with(compact('produtos'));        
    }

    public function product_store(Request $request) {
       // dd($request);
        $produto = new Produto();
        $produto->codigo = $request->codigo;
        $produto->descricao = $request->descricao;
        $produto->setor = $request->setor;
        $produto->fabricante = $request->fabricante;
        $produto->fornecedor = $request->fornecedor;
        $produto->precoDeCusto = $request->precoDeCusto;
        $produto->precoDeVenda = $request->precoDeVenda;
        $produto->margemDeLucro = $request->margemDeLucro;
        $produto->estoqueMinimo = $request->estoqueMinimo;
        $produto->estoqueAtual = $request->estoqueAtual;
        $produto->unidade = $request->unidade;
        $produto->ultimoReajuste = $request->ultimoReajuste;
        $produto->observacoes = $request->observacoes;
        $produto->save();
        $sucesso = true;
        return view('produto_novo')->with(compact("sucesso"));
    }
}
