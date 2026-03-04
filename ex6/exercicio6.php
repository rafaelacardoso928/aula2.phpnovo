<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="estilo6.css">
</head>
<body>

<div class="container">
    <h2>Contador de 1 até 10</h2>

    <div class="contador">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        ?>
    </div>
</div>

</body>
</html>