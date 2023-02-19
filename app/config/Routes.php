<?php 

namespace App\config;

use Config\Route;

/**
 * Exemplo de rota.
 */
$router = new Route();

/**
 * Path que deseja receber a requisição, juntamente com o method "GET" ou "POST", e após a view.
 * Como projeto simples para api, não possui um render com paramentos melhores, e apenas uma base limpa.
 */
$router->get('/' , 'Home');