<?php

namespace App\DAO\MySQL\Codeeasy;

class ProdutosDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
        $this->pdo->query()
    }
}