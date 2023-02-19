<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: *");

define('root', $_SERVER['DOCUMENT_ROOT'] . '/basePhp/');
define('handler', root . 'app/handlers/');