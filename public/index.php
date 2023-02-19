<?php

/**
 * Init do sistema, definição de Headers e algumas variaveis para o sistema.
 */
require_once __DIR__ . '/../config/init.php';

/**
 * Init Autoload
 */
require '../vendor/autoload.php';

/**
 * Inicialização do sistema, com a definição de rotas.
 */
require_once __DIR__ . '/../app/config/Routes.php';