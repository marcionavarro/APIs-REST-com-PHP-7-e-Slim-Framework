<?php

namespace App\DAO\MySQL\Codeeasy;

use PDO;
use App\Models\MYSQL\Codeeasy\ProdutoModel;

class ProdutosDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProdutos(): array
    {
        $produtos = $this->pdo->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_ASSOC);
        return $produtos;
    }

    public function insertProduto(ProdutoModel $produto): ProdutoModel
    {

    }
}
