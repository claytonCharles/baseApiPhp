<?php

namespace App\handlers;

$json = [
    'application' => 'teste',
];

$data = [
    'name' => 'Clayton',
    'data' => $json
];

echo json_encode($data);