<?php

require_once __DIR__ . '/../dao/ServicoDao.php';
require_once __DIR__ . '/../model/Servico.php';

class ServicoController
{
    public function listar()
    {
        return (new ServicoDao())->listar();
    }

    public function buscarPorId($id)
    {
        return (new ServicoDao())->buscarPorId($id);
    }

    public function salvar()
    {
        $s = new Servico(
            $_POST['nome'],
            $_POST['descricao'],
            $_POST['preco'],
            $_POST['duracao']
        );

        (new ServicoDao())->salvar($s);

        header("Location: ListaServico.php");
        exit;
    }

    public function atualizar()
    {
        $s = new Servico(
            $_POST['nome'],
            $_POST['descricao'],
            $_POST['preco'],
            $_POST['duracao'],
            $_POST['id']
        );

        (new ServicoDao())->atualizar($s);

        header("Location: ListaServico.php");
        exit;
    }

    public function deletar()
    {
        (new ServicoDao())->deletar($_POST['id']);

        header("Location: ListaServico.php");
        exit;
    }
}