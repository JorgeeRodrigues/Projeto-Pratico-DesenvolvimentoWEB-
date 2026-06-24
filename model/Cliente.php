<?php

class Cliente
{
    private $id;
    private $nome;
    private $cpf;
    private $telefone;
    private $cep;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;

    public function __construct(
        $nome,
        $cpf,
        $telefone,
        $cep = null,
        $rua = null,
        $bairro = null,
        $cidade = null,
        $estado = null,
        $id = null
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->cep = $cep;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->id = $id;
    }

    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getCpf() { return $this->cpf; }
    public function getTelefone() { return $this->telefone; }
    public function getCep() { return $this->cep; }
    public function getRua() { return $this->rua; }
    public function getBairro() { return $this->bairro; }
    public function getCidade() { return $this->cidade; }
    public function getEstado() { return $this->estado; }
}