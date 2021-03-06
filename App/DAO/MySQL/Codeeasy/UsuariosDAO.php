<?php

namespace App\DAO\MySQL\Codeeasy;

use App\Models\MYSQL\Codeeasy\LojaModel;
use App\Models\MYSQL\Codeeasy\UsuarioModel;
use PDO;

class UsuariosDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByEmail(string $email): ?UsuarioModel
    {
        $statement = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $statement->bindParam('email', $email);
        $statement->execute();
        $usuarios = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (count($usuarios) === 0) {
            return null;
        }

        $usuario = new UsuarioModel();
        $usuario->setId($usuarios[0]['id'])
            ->setNome($usuarios[0]['nome'])
            ->setEmail($usuarios[0]['email'])
            ->setSenha($usuarios[0]['senha']);
        return $usuario;
    }
}