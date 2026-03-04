<?php

$notas = [7, 8, 6];

function calcularMedia($notas) {
    $soma = 0;

    foreach ($notas as $nota) {
        $soma += $nota;
    }

    $media = $soma / count($notas);
    return $media;
}


$media = calcularMedia($notas);

if ($media >= 7) {
    $resultado = "Aprovado";
} else {
    $resultado = "Reprovado";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="estilo10.css">
</head>
<body>

<div class="container">
    <h2>Cálculo de Média</h2>

    <div class="bloco">
        <p><strong>Notas:</strong> <?= implode(", ", $notas); ?></p>
        <p><strong>Média:</strong> <?= $media; ?></p>
        <p><strong>Resultado:</strong> <?= $resultado; ?></p>
    </div>
</div>

</body>
</html>