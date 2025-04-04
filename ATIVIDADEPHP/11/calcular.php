<?php
$quantidade = $_POST['quantidade'] ?? 0;
$numero = $_POST['numero'] ?? 0;
$u = 0;
echo "<h2>Resultado:</h2>";

if (is_numeric($quantidade) && $quantidade > 0) {
    for ($i = $quantidade; $i <= 0; $i--) {
		$i = $i + $numero + 1;
		echo "$i <br>";}
    
} else {
    echo "Quantidade inválida.";
}
?>