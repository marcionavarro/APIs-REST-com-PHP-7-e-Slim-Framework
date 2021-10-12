<?php

namespace  src;

use App\DAO\MySQL\Codeeasy\LojasDAO;

function slimConfiguration(): \Slim\Container
{
    $configuration = [
        'settings' => [
            'displayErrorDetails' => getenv('DISPLAY_ERRORS_DETAILS'),
        ],
    ];
    $container = new \Slim\Container($configuration);
    $container->offsetSet(LojasDAO::class, new LojasDAO());

    return $container;
}