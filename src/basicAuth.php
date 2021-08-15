<?php

namespace src;

use Tuupola\Middleware\HttpBasicAuthentication;

function basicAuth(): HttpBasicAuthentication
{
    return new HttpBasicAuthentication([
        "users" => [
            "root" => "teste123"
        ],

        "error" => function ($response) {
            $body = $response->getBody();
            $body->write(json_encode(array("response" => "Usuario ou senha incorretos")));
            return $response->withBody($body);
        }
    ]);
}
