<?php

namespace App\DAO\MySQL\Codeeasy;

use App\Models\MYSQL\Codeeasy\TokenModel;
use PDO;

class TokensDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function createToken(TokenModel $token): void
    {
        $statement = $this->pdo
            ->prepare("INSERT INTO tokens (token, refresh_token, expired_at, usuarios_id) 
                             VALUES  (:token, :refresh_token, :expired_at, :usuarios_id)");
        $statement->execute([
            'token' => $token->getToken(),
            'refresh_token' => $token->getRefreshToken(),
            'expired_at' => $token->getExpireAt(),
            'usuarios_id' => $token->getUsuariosId()
        ]);
    }

    public function verifyRefreshToken(string $refreshToken): bool
    {
        $statement = $this->pdo->prepare("SELECT id FROM tokens WHERE refresh_token = :refresh_token");
        $statement->bindParam('refresh_token', $refreshToken);
        $statement->execute();
        $tokens = $statement->fetchAll(PDO::FETCH_ASSOC);
        return count($tokens) === 0 ? false : true;
    }
}