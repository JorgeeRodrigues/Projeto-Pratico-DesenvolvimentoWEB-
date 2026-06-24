<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../model/Produto.php';

class ProdutoDao
{
    private $tabela = "produtos";
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connection;
    }

    // CREATE
    public function salvar(Produto $p)
    {
        $sql = "INSERT INTO $this->tabela (nome, preco, quantidade, categoria)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $p->getNome(),
            $p->getPreco(),
            $p->getQuantidade(),
            $p->getCategoria()
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
            $lista[] = new Produto(
                $r['nome'],
                $r['preco'],
                $r['quantidade'],
                $r['categoria'],
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

        return new Produto(
            $r['nome'],
            $r['preco'],
            $r['quantidade'],
            $r['categoria'],
            $r['id']
        );
    }

    // UPDATE
    public function atualizar(Produto $p)
    {
        $sql = "UPDATE $this->tabela
                SET nome=?, preco=?, quantidade=?, categoria=?
                WHERE id=?";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            $p->getNome(),
            $p->getPreco(),
            $p->getQuantidade(),
            $p->getCategoria(),
            $p->getId()
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