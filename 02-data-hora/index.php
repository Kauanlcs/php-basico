<?php
date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");
$hora = date("H:i:s");

$horaAtual = (int) date("H");

if ($horaAtual < 12) {
    $saudacao = "Bom dia";
} elseif ($horaAtual < 18) {
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e hora</title>
</head>
<body>
    <h1>Data e hora do servidor</h1>

    <h2><?= $saudacao ?>!</h2>

    <p>Hoje é <strong><?= $data ?></strong>.</p>

    <p>Agora são <strong><?= $hora ?></strong>.</p>
</body>
</html>