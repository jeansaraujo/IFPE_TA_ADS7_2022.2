<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client as Client;
use App\Http\Resources\Client as ClientResource;

class AdminController extends Controller {

    public function login(){
        $acesso = time();
        $cliente = "Casa das Balas";
        return view('login')->with(compact('cliente'));        
    }

    public function admin_index(){   
        $clients = Client::all(); 
        //dd($clients);   
        return view('admin')->with(compact('clients')); 
    }

    public function admin_client_new(){
        $sucesso = false;       
        return view('admin.client.admin_cliente_novo')->with(compact('sucesso'));        
    }

    public function admin_client_list(){
        $clients = DB::table('clients')
                    ->where('deleted', '=', null)
                    ->get();
        return view('admin.client.admin_cliente_lista')->with(compact('clients'));        
    }

    public function admin_client_search(Request $request){
        $busca = "%".$request->nome."%";
        $clients = DB::table('clients')
                    ->where('nome','like',$busca)  
                    ->orWhere('email','like',$busca)
                    ->orWhere('telefone','like',$busca)                 
                    ->get(); 
        return view('admin.client.admin_cliente_lista')->with(compact('clients'));        
    }
    
    public function admin_client_store(Request $request){
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
        $client->save();
        $sucesso = true;
        return view('admin.client.admin_cliente_novo')->with(compact("sucesso"));
    }

    public function admin_cliente_novo($id) {
        $client = Client::findOrFail($id);
        return view('admin.client.admin_cliente_update')->with(compact('client'));
    }

    public function admin_client_edit(Request $request, $id) {

        $clients = DB::table('clients')
                    ->where('id', $id)
                    ->update([
                        'nome' => $request->nome,
                        'numero' => $request->numero,
                        'endereco' => $request->endereco,
                        'complemento' => $request->complemento,
                        'bairro' => $request->bairro,
                        'cidade' => $request->cidade,
                        'estado' => $request->estado,
                        'cep' => $request->cep,
                        'cpf' => $request->cpf,
                        'identidade' => $request->identidade,
                        'telefone' => $request->telefone,
                        'celular' => $request->celular,
                        'email' => $request->email,
                        'site' => $request->site,
                        'nascimento' => $request->nascimento,
                    ]);
        return $this->admin_client_list();
    }

    public function admin_client_delete($id) {
        $client = Client::findOrFail($id);
        return view('admin.client.admin_cliente_delete')->with(compact('client'));
    }

    public function admin_client_softDelete($id) {
        $client = DB::table('clients')
                    ->where('id', $id)
                    ->update([
                        'deleted' => $this->format_date(),
                    ]);
        return $this->admin_client_list();
    }

    private function format_date() {
        $date = date('Y/m/d H:i:s');
        return $date;
    }
}
