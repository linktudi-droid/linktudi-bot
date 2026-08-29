<?php

header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'status' => 'online',
    'message' => 'Sistema Linktudi iniciado com sucesso!'
]);
