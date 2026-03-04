<?php
// 1. Variável idade
$idade = 17;

// 2. Verificação
if ($idade >= 18) {
    $resultado = "Maior de idade";
} else {
    $resultado = "Menor de idade";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="estilo4.css">
</head>
<body>

<div class="container">
    <h2>Verificação de Idade</h2>

    <p class="idade">Idade informada: <?= $idade ?> anos</p>

    <div class="resultado">
        <?= $resultado ?>
    </div>
</div>

</body>
</html>