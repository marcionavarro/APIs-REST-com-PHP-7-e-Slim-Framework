<?php

namespace App\Controllers;

use App\Exceptions\TestException;
use Exception;
use InvalidArgumentException;
use Psr\Http\Message\{
    RequestInterface as Request,
    ResponseInterface as Response
};
use Throwable;

final class ExceptionController
{
    public function test(Request $request, Response $response, array $args): Response
    {
        try {
            // codigo ...
            throw new TestException("Testando");
            return $response->withJson(['msg' => 'ok']);
        }catch (TestException $ex){
            return $response->withJson([
                'error' => TestException::class,
                'status' => 400,
                'code' => "003",
                'userMessage' => "Testando apenas....",
                'developerMessage' => $ex->getMessage()
            ], 400);
        }catch (InvalidArgumentException $ex){
            return $response->withJson([
                'error' => InvalidArgumentException::class,
                'status' => 400,
                'code' => "002",
                'userMessage' => "É necessário enviar todos os dados para o login.",
                'developerMessage' => $ex->getMessage()
            ], 400);
        }catch (Exception | Throwable $ex){
            return $response->withJson([
                'error' => Exception::class,
                'status' => 500,
                'code' => "001",
                'userMessage' => "Erro na aplicação, entre em contato com o administrador do sistema.",
                'developerMessage' => $ex->getMessage()
            ], 500);
        }
    }
}