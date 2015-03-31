<?php

namespace SON;

class Produto
{
    private $db;
    
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    
    public function listar()
    {
        $query = "SELECT nome FROM produtos";
        $stmt = $this->db->query($query);
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC); // Traz os dados
    }
}