<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client as Client;

class AdminController extends Controller
{
    public function login(){
        $acesso = time();
        $tipo = "Administração";
        return view('login')->with(compact('acesso','tipo'));        
    }
    public function admin_index(){   
        $clients = Client::all(); 
        //dd($clients);   
        return view('admin_principal')->with(compact('clients')); 
        
        
    }
    public function admin_cliente_novo(){       
        return view('admin_cliente_novo');        
    }
}
