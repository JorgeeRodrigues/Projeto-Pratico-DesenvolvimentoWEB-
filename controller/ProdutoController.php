<?php

require_once __DIR__ . '/../dao/ProdutoDao.php';
require_once __DIR__ . '/../model/Produto.php';

class ProdutoController
{
    public function listar()
    {
        return (new ProdutoDao())->listar();
    }

    public function buscarPorId($id)
    {
        return (new ProdutoDao())->buscarPorId($id);
    }

    public function salvar()
    {
        $p = new Produto(
            $_POST['nome'],
            $_POST['preco'],
            $_POST['quantidade'],
            $_POST['categoria']
        );

        (new ProdutoDao())->salvar($p);

        header("Location: ListaProduto.php");
        exit;
    }

    public function atualizar()
    {
        $p = new Produto(
            $_POST['nome'],
            $_POST['preco'],
            $_POST['quantidade'],
            $_POST['categoria'],
            $_POST['id']
        );

        (new ProdutoDao())->atualizar($p);

        header("Location: ListaProduto.php");
        exit;
    }

    public function deletar()
    {
        (new ProdutoDao())->deletar($_POST['id']);

        header("Location: ListaProduto.php");
        exit;
    }
}