<?php

class Produto
{
    private $db;
    
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    
    public function listar()
    {
        $query = "SELECT * FROM produtos";
        $stmt = $this->db->query($query);
        
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); // Traz os dados
        
        $array = array();
        
        foreach ($resultado as $p) {
            $array[] = $p['nome'];
        }
        
        return $array;
    }
}