<?php

namespace App\Controllers;

use App\DAO\MySQL\Codeeasy\LojasDAO;
use App\Models\MYSQL\Codeeasy\LojaModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class LojaController
{
    public function getLojas(Request $request, Response $response, array $args): Response
    {
        $lojasDAO = new LojasDAO();
        $lojas = $lojasDAO->getAllLojas();
        $response = $response->withJson($lojas);
        return $response;
    }

    public function insertLoja(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();

        $loja->setNome($data['nome'])
            ->setEndereco($data['telefone'])
            ->setTelefone($data['endereco']);

        $lojasDAO->insertLoja($loja);

        $response = $response->withJson(['message' => 'Loja cadastrada com sucesso!']);
        return $response;
    }

    public function updateLoja(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();
        $id = $request->getQueryParams()['id'];

        $lojasDAO = new LojasDAO();

        $loja = new LojaModel();
        $loja->setId($id)->setNome($data['nome'])->setTelefone($data['telefone'])->setEndereco($data['endereco']);

        $lojasDAO->updateLoja($loja);

        $response = $response->withJson(['message' => 'Loja atualizada com sucesso!']);
        return $response;
    }

    public function deleteLoja(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();
        $id = (int)$queryParams['id'];

        $lojasDAO = new LojasDAO();
        $lojasDAO->deleteLoja($id);

        $response = $response->withJson(['message' => 'Loja deletada com sucesso!']);
        return $response;
    }
}
