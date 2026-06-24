<?php

class Servico
{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $duracao;

    public function __construct($nome, $descricao, $preco, $duracao, $id = null)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->duracao = $duracao;
        $this->id = $id;
    }

    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getDescricao() { return $this->descricao; }
    public function getPreco() { return $this->preco; }
    public function getDuracao() { return $this->duracao; }
}