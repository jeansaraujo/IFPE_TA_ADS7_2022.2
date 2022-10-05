<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome' => $this->nome;
            'numero' => $this->numero;
            'endereco' => $this->endereco;
            'complemento' => $this->complemento;
            'bairro' => $this->bairro;
            'cidade' => $this->cidade;
            'estado' = $this->estado;
            'cep' = $this->cep;
            'cpf' = $this->cpf;
            'identidade' = $this->identidade;
            'telefone' = $this->telefone;
            'celular' = $this->celular;
            'email' = $this->email;
            'site' = $this->site;
            'nascimento' = $this->nascimento;
        ];
    }
}
