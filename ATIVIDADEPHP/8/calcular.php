<?php
$quantidade = $_POST['quantidade'] ?? 0;

echo "<h2>Resultado:</h2>";

if (is_numeric($quantidade) && $quantidade > 0) {
    for ($i = 1; $i <= $quantidade; $i++) {
		$i++;
		if ($i < $quantidade){
        echo "$i <br>";}
    }
} else {
    echo "Quantidade inválida.";
}
?>