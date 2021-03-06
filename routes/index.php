<?php

use App\Middlewares\JwtDateTimeMiddleware;

use function src\{jwtAuth, slimConfiguration, basicAuth};

use App\Controllers\{ AuthController, ProdutoController, LojaController, ExceptionController };

$app = new \Slim\App(slimConfiguration());

// =================================

$app->group('/v1', function () use ($app) {
    $app->get('/test-with-versions', function () {
        return "oi v1";
    });
});

$app->group('/v2', function () use ($app) {
    $app->get('/test-with-versions', function () {
        return "oi v2";
    });
});

$app->get('/exception-test', ExceptionController::class . ':test');

$app->post('/login', AuthController::class . ':login');
$app->post('/refresh-token', AuthController::class . ':refreshToken');

$app->get('/teste', function () {
    echo "oi";
})->add(jwtAuth());

$app->group('', function () use ($app) {
    $app->get('/lojas', LojaController::class . ':getLojas');
    $app->post('/loja', LojaController::class . ':insertLoja');
    $app->put('/loja[/{id}]', LojaController::class . ':updateLoja');
    $app->delete('/loja[/{id}]', LojaController::class . ':deleteLoja');

    $app->get('/produtos', ProdutoController::class . ':getProdutos');
    $app->post('/produto', ProdutoController::class . ':insertProduto');
    $app->put('/produto', ProdutoController::class . ':updateProduto');
    $app->delete('/produto', ProdutoController::class . ':deleteProduto');
})->add(basicAuth());

// =================================

$app->run();