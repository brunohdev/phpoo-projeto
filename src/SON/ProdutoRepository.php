<?php

namespace SON;

class ProdutoRepository
{
    
    private $id;
    private $nome;
    private $descricao;
    private $created_at;
    private $updated_at;
    
    
    // GETTERS and SETTERS
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCreated_at() {
        return $this->created_at;
    }

    public function getUpdated_at() {
        return $this->updated_at;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
        return $this;
    }

    public function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
        return $this;
    }
    
}