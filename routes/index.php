<?php

use function src\slimConfiguration;
use \App\Controllers\ProdutoController;
use \App\Controllers\LojaController;

$app = new \Slim\App(slimConfiguration());

// =================================

$app->get('/lojas', LojaController::class . ':getLojas');
$app->post('/loja', LojaController::class . ':insertLoja');
$app->put('/loja[/{id}]', LojaController::class . ':updateLoja');
$app->delete('/loja[/{id}]', LojaController::class . ':deleteLoja');

$app->get('/produtos', ProdutoController::class . ':getProdutos');
$app->post('/produto', ProdutoController::class . ':insertProduto');
$app->put('/produto', ProdutoController::class . ':updateProduto');
$app->delete('/produto', ProdutoController::class . ':deleteProduto');

// =================================

$app->run();
