<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('admin_cliente_novo');        
    }
    public function admin_client_store(Request $request){
        dd($request); 
        //return back();
                   
    }
}
