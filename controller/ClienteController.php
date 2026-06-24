<?php

require_once __DIR__ . '/../dao/ClienteDao.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteController
{
    public function listar()
    {
        return (new ClienteDao())->listar();
    }

    public function buscarPorId($id)
    {
        return (new ClienteDao())->buscarPorId($id);
    }

    public function salvar()
    {
        $cliente = new Cliente(
            $_POST['nome'],
            $_POST['cpf'],
            $_POST['telefone'],
            $_POST['cep'],
            $_POST['rua'],
            $_POST['bairro'],
            $_POST['cidade'],
            $_POST['estado']
        );

        (new ClienteDao())->salvar($cliente);

        header("Location: ListaCliente.php");
        exit;
    }

    public function atualizar()
    {
        $cliente = new Cliente(
            $_POST['nome'],
            $_POST['cpf'],
            $_POST['telefone'],
            $_POST['cep'],
            $_POST['rua'],
            $_POST['bairro'],
            $_POST['cidade'],
            $_POST['estado'],
            $_POST['id']
        );

        (new ClienteDao())->atualizar($cliente);

        header("Location: ListaCliente.php");
        exit;
    }

    public function deletar()
    {
        (new ClienteDao())->deletar($_POST['id']);

        header("Location: ListaCliente.php");
        exit;
    }
}