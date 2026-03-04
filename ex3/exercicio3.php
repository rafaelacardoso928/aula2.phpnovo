<?php
// 1. Declarando as variáveis
$a = 10;
$b = 5;

// 2. Verificando qual é maior ou se são iguais
if ($a > $b) {
    $resultado = "O número " . $a . " é maior que " . $b;
} elseif ($b > $a) {
    $resultado = "O número " . $b . " é maior que " . $a;
} else {
    $resultado = "Os números são iguais";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="estilo3.css">
</head>
<body>

<div class="container">
    <h2>Comparação de Números</h2>
    <div class="resultado">
        <?= $resultado ?>
    </div>
</div>

</body>
</html>