<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Pet.php';

class PetDao
{
    private $tabela = 'pets';
    private $connection;

    public function __construct()
    {
        $db = new Database();

        $this->connection = $db->connection;
    }

    // CREATE
    public function salvar(Pet $pet)
    {
        $sql = "INSERT INTO $this->tabela
                (nome_pet, especie, idade, dono_pet)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $pet->getNomePet(),
            $pet->getEspecie(),
            $pet->getIdade(),
            $pet->getDonoPet()
        ]);
    }

    // READ
    public function listar()
    {
        $sql = "SELECT * FROM $this->tabela ORDER BY id";

        $stmt = $this->connection->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pets = [];

        foreach ($rows as $row) {

            $pets[] = new Pet(
                $row['nome_pet'],
                $row['especie'],
                $row['idade'],
                $row['dono_pet'],
                $row['id']
            );
        }

        return $pets;
    }

    // BUSCAR POR ID
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM $this->tabela WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([$id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new Pet(
            $row['nome_pet'],
            $row['especie'],
            $row['idade'],
            $row['dono_pet'],
            $row['id']
        );
    }

    // UPDATE
    public function atualizar(Pet $pet)
    {
        $sql = "UPDATE $this->tabela
                SET nome_pet = ?, especie = ?, idade = ?, dono_pet = ?
                WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $pet->getNomePet(),
            $pet->getEspecie(),
            $pet->getIdade(),
            $pet->getDonoPet(),
            $pet->getId()
        ]);
    }

    // DELETE
    public function deletar($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([$id]);
    }
}