<?php

$nota = 6;

if ($nota >= 7) {
    $resultado = "Aprovado";
} elseif ($nota >= 5) {
    $resultado = "Recuperação";
} else {
    $resultado = "Reprovado";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="estilo5.css">
</head>
<body>

<div class="container">
    <h2>Sistema de Notas</h2>

    <p class="nota">Nota: <?= $nota ?></p>

    <div class="resultado">
        Resultado: <?= $resultado ?>
    </div>
</div>

</body>
</html>