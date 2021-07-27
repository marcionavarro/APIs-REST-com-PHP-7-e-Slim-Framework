<?php

namespace App\DAO\MySQL\Codeeasy;

use PDO;

class LojasDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function teste()
    {
        $lojas = $this->pdo
        ->query("SELECT * FROM lojas;")
        ->fetchAll(PDO::FETCH_ASSOC);

    foreach ($lojas as $loja) {
        var_dump($loja);
    }
        die;
    }
}