<?php
$palavra = $_POST['palavra'] ?? '';

echo "<h2>Resultado:</h2>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$i - $palavra <br>";
    }
?>