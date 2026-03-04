<?php

$nomes = ["Ana", "Carlos", "Julia", "Pedro", "Marina"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="estilo8.css">
</head>
<body>

<div class="container">
    <h2>Lista de Nomes</h2>

    <div class="lista">
        <?php
   
        foreach ($nomes as $nome) {
            echo "Nome: " . $nome . "<br>";
        }
        ?>
    </div>
</div>

</body>
</html>