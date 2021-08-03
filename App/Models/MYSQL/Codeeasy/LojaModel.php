<?php

namespace App\Models\MYSQL\Codeeasy;

final class LojaModel
{
    /** @var int */
    private $id;

    /** @var string */
    private $nome;

    /** @var string */
    private $telefone;

    /** @var string */
    private $endereco;


    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /** @param int $id */
    public function setId(int $id): LojaModel
    {
        $this->id = $id;
        return $this;
    }


    /** @return string */
    public function getNome(): string
    {
        return $this->nome;
    }

    /** @param string $nome */
    public function setNome(string $nome): LojaModel
    {
        $this->nome = $nome;
        return $this;
    }

    /** @return string */
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    /** @param string $telefone */
    public function setTelefone(string $telefone): LojaModel
    {
        $this->telefone = $telefone;
        return $this;
    }

    /** @return string */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**  @param string $endereco */
    public function setEndereco(string $endereco): LojaModel
    {
        $this->endereco = $endereco;
        return $this;
    }


}
