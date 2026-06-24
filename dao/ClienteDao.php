<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Cliente.php';

class ClienteDao
{
    private $tabela = 'clientes';
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connection;
    }

    // CREATE
    public function salvar(Cliente $cliente)
    {
        $sql = "INSERT INTO $this->tabela
                (nome, cpf, telefone, cep, rua, bairro, cidade, estado)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $cliente->getNome(),
            $cliente->getCpf(),
            $cliente->getTelefone(),
            $cliente->getCep(),
            $cliente->getRua(),
            $cliente->getBairro(),
            $cliente->getCidade(),
            $cliente->getEstado()
        ]);
    }

    // READ
    public function listar()
    {
        $sql = "SELECT * FROM $this->tabela ORDER BY id";

        $stmt = $this->connection->query($sql);

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $clientes = [];

        foreach ($rows as $row) {

            $clientes[] = new Cliente(
                $row['nome'],
                $row['cpf'],
                $row['telefone'],
                $row['cep'],
                $row['rua'],
                $row['bairro'],
                $row['cidade'],
                $row['estado'],
                $row['id']
            );
        }

        return $clientes;
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

        return new Cliente(
            $row['nome'],
            $row['cpf'],
            $row['telefone'],
            $row['cep'],
            $row['rua'],
            $row['bairro'],
            $row['cidade'],
            $row['estado'],
            $row['id']
        );
    }

    // UPDATE
    public function atualizar(Cliente $cliente)
    {
        $sql = "UPDATE $this->tabela
                SET nome = ?, cpf = ?, telefone = ?, cep = ?, rua = ?, bairro = ?, cidade = ?, estado = ?
                WHERE id = ?";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $cliente->getNome(),
            $cliente->getCpf(),
            $cliente->getTelefone(),
            $cliente->getCep(),
            $cliente->getRua(),
            $cliente->getBairro(),
            $cliente->getCidade(),
            $cliente->getEstado(),
            $cliente->getId()
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