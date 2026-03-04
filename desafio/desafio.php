<?php

$numeros = [2, 7, 10, 3, 8];

$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Desafio Extra</title>
    <link rel="stylesheet" href="estilodesafio.css">
</head>
<body>

<div class="container">
    <h2>Contador de Pares e Ímpares</h2>

    <div class="bloco">
        <p><strong>Números:</strong> <?= implode(", ", $numeros); ?></p>
        <p><strong>Pares:</strong> <?= $pares; ?></p>
        <p><strong>Ímpares:</strong> <?= $impares; ?></p>
    </div>
</div>

</body>
</html>