<?php
$nome = "Rafa";
$idade = 17;
$cidade = "Sapucaia do Sul";

$frase = "Olá, meu nome é " . $nome . ", tenho " . $idade . " anos e moro em " . $cidade . ".";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>

<div class="container">
    <p><?php echo $frase; ?></p>
</div>

</body>
</html>