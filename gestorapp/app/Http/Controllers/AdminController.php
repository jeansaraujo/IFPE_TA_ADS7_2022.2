<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client as Client;

class AdminController extends Controller
{
    public function login(){
        $acesso = time();
        $cliente = "Casa das Balas";
        return view('login')->with(compact('cliente'));        
    }
    public function admin_index(){   
        $clients = Client::all(); 
        //dd($clients);   
        return view('admin_principal')->with(compact('clients')); 
    }
    public function admin_client_new(){
        $sucesso = false;       
        return view('admin_cliente_novo')->with(compact('sucesso'));        
    }
    public function admin_client_list(){
       $clients = Client::all();   
        return view('admin_cliente_lista')->with(compact('clients'));        
    }
    public function admin_client_search(Request $request){
        $clients = DB::table('clients')
                    ->where('nome','=',$request->nome)                    
                    ->get(); 
        return view('admin_cliente_lista')->with(compact('clients'));        
     }
    public function admin_client_store(Request $request){
       // dd($request);
        $client = new Client();
        $client->nome = $request->nome;
        $client->numero = $request->numero;
        $client->endereco = $request->endereco;
        $client->complemento = $request->complemento;
        $client->bairro = $request->bairro;
        $client->cidade = $request->cidade;
        $client->estado = $request->estado;
        $client->cep = $request->cep;
        $client->cpf = $request->cpf;
        $client->identidade = $request->identidade;
        $client->telefone = $request->telefone;
        $client->celular = $request->celular;
        $client->email = $request->email;
        $client->site = $request->site;
        $client->nascimento = $request->nascimento;
        //$client->save();
        $sucesso = true;
        return view('admin_cliente_novo')->with(compact("sucesso"));
    }
}
