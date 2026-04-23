<?php
namespace app\models;

class Animal {
    public $id;
    public $nome;
    public $especie;
    public $raca;
    public $sexo;
    public $idade;
    public $porte;
    public $historico_saude;
    public $castrado;
    public $status;

    public function __construct($dados = []) {
        $this->id = $dados['id'] ?? 0;
        $this->nome = $dados['nome'] ?? '';
        $this->especie = $dados['especie'] ?? '';
        $this->raca = $dados['raca'] ?? '';
        $this->sexo = $dados['sexo'] ?? 'Macho';
        $this->idade = $dados['idade'] ?? '';
        $this->porte = $dados['porte'] ?? 'Pequeno';
        $this->historico_saude = $dados['historico_saude'] ?? '';
        $this->castrado = isset($dados['castrado']) ? 1 : 0;
        $this->status = $dados['status'] ?? 'disponível';
    }
}