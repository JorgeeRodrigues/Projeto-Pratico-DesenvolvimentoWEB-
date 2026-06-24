<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Servico.php';

class ServicoDao
{
    private $tabela = "servicos";
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connection;
    }

    // CREATE
    public function salvar(Servico $s)
    {
        $sql = "INSERT INTO $this->tabela (nome, descricao, preco, duracao)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $s->getNome(),
            $s->getDescricao(),
            $s->getPreco(),
            $s->getDuracao()
        ]);
    }

    // READ
    public function listar()
    {
        $sql = "SELECT * FROM $this->tabela ORDER BY id";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $lista = [];

        foreach ($rows as $r) {
            $lista[] = new Servico(
                $r['nome'],
                $r['descricao'],
                $r['preco'],
                $r['duracao'],
                $r['id']
            );
        }

        return $lista;
    }

    // BUSCAR POR ID
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM $this->tabela WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);

        $r = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$r) return null;

        return new Servico(
            $r['nome'],
            $r['descricao'],
            $r['preco'],
            $r['duracao'],
            $r['id']
        );
    }

    // UPDATE
    public function atualizar(Servico $s)
    {
        $sql = "UPDATE $this->tabela
                SET nome=?, descricao=?, preco=?, duracao=?
                WHERE id=?";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $s->getNome(),
            $s->getDescricao(),
            $s->getPreco(),
            $s->getDuracao(),
            $s->getId()
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