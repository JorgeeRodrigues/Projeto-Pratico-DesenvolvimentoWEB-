<?php

require_once __DIR__ . '/../dao/PetDao.php';
require_once __DIR__ . '/../model/Pet.php';

class PetController
{
    public function listar()
    {
        return (new PetDao())->listar();
    }

    public function buscarPorId($id)
    {
        return (new PetDao())->buscarPorId($id);
    }

    public function salvar()
    {
        $pet = new Pet(
            $_POST['nome_pet'],
            $_POST['especie'],
            $_POST['idade'],
            $_POST['dono_pet']
        );

        (new PetDao())->salvar($pet);

        header("Location: ListaPet.php");
        exit;
    }

    public function atualizar()
    {
        $pet = new Pet(
            $_POST['nome_pet'],
            $_POST['especie'],
            $_POST['idade'],
            $_POST['dono_pet'],
            $_POST['id']
        );

        (new PetDao())->atualizar($pet);

        header("Location: ListaPet.php");
        exit;
    }

    public function deletar()
    {
        (new PetDao())->deletar($_POST['id']);

        header("Location: ListaPet.php");
        exit;
    }
}