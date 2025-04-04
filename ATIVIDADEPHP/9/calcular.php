<?php
$quantidade = $_POST['quantidade'] ?? 0;
$u = 0;
echo "<h2>Resultado:</h2>";

if (is_numeric($quantidade) && $quantidade > 0) {
    for ($i = 1; $i <= 10; $i++) {
		$u= $quantidade * $i;
        echo "$i X $u <br>";}
    
} else {
    echo "Quantidade inválida.";
}
?>