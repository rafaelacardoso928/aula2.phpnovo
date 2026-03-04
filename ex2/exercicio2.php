<?php

$numero1 = 10;
$numero2 = 5;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>

<div class="container">
    <h2>Resultados</h2>
    <p>Soma: <?php echo $soma; ?></p>
    <p>Subtração: <?php echo $subtracao; ?></p>
    <p>Multiplicação: <?php echo $multiplicacao; ?></p>
    <p>Divisão: <?php echo $divisao; ?></p>
</div>

</body>
</html>