<?php


namespace App\Models\MYSQL\Codeeasy;


final class ProdutoModel
{
    private $id;
    private $nome;
    private $preco;
    private $quantidade;

    private LojaModel $loja_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): ProdutoModel
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco): ProdutoModel
    {
        $this->preco = $preco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade): ProdutoModel
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return LojaModel
     */
    public function getLojaId()
    {
        return $this->loja_id;
    }

    /**
     * @param LojaModel $loja_id
     */
    public function setLojaId(LojaModel $loja_id): LojaModel
    {
        $this->loja_id = $loja_id;
    }



}

