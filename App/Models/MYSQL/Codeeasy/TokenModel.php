<?php


namespace App\Models\MYSQL\Codeeasy;

final class TokenModel
{
    /** @var int */
    private $id;

    /** @var string */
    private $token;

    /** @var string */
    private $refresh_token;

    /** @var string */
    private $expire_at;

    /** @var int */
    private $usuarios_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshToken(): string
    {
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     * @return self
     */
    public function setRefreshToken(string $refresh_token): self
    {
        $this->refresh_token = $refresh_token;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpireAt(): string
    {
        return $this->expire_at;
    }

    /**
     * @param string $expire_at
     * @return self
     */
    public function setExpireAt(string $expire_at): self
    {
        $this->expire_at = $expire_at;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsuariosId(): int
    {
        return $this->usuarios_id;
    }

    /**
     * @param int $usuarios_id
     * @return self
     */
    public function setUsuariosId(int $usuarios_id): self
    {
        $this->usuarios_id = $usuarios_id;
        return $this;
    }


}
