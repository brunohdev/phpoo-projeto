<?php

namespace SON;

class ProdutoService
{
    private $db;
    private $produto;

    public function __construct(\PDO $db, ProdutoRepository $produto)
    {
        $this->db = $db;
        $this->produto = $produto;
    }
    
    public function find($id)
    {
        $query = "SELECT * FROM produtos WHERE id=:id";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        
        return $stmt->fetch();
    }
    
    public function listar()
    {
        $query = "SELECT id, nome FROM produtos";
        $stmt = $this->db->query($query);
        
        return $stmt->fetchAll(); // Traz os dados
    }
    
    public function inserir()
    {
        $query = "INSERT INTO produtos (nome, descricao, created_at) VALUES (:nome, :descricao, NOW())";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->produto->getNome());
        $stmt->bindValue(':descricao', $this->produto->getDescricao());
        
        if ($stmt->execute()) {
            return true;
        }
    }
    
    public function alterar()
    {
        $query = "UPDATE produtos SET nome=:nome, descricao=:descricao, updated_at=NOW() WHERE id=:id";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->produto->getId());
        $stmt->bindValue(':nome', $this->produto->getNome());
        $stmt->bindValue(':descricao', $this->produto->getDescricao());
        
        if ($stmt->execute()) {
            return true;
        }
    }
    
    public function remover($id)
    {
        $query = "DELETE FROM produtos WHERE id=:id";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        
        if ($stmt->execute()) {
            return true;
        }
    }
}