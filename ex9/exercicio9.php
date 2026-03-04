<?php

function somar($numero1, $numero2) {
    $soma = $numero1 + $numero2;
    return $soma;
}


$resultado = somar(10, 15);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="estilo9.css">
</head>
<body>

<div class="container">
    <h2>Função de Soma</h2>

    <div class="resultado">
        Resultado da soma: <?= $resultado ?>
    </div>
</div>

</body>
</html>