<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Repetição em PHP</title>
</head>
<body>
    <h2>Formulário de Repetição</h2>
    <form action="calcular.php" method="post">
        <label for="palavra">intervalo:</label><br>
        <input type="number" id="numero" name="numero" min="1" required><br><br>

        <label for="quantidade">numero</label><br>
        <input type="number" id="quantidade" name="quantidade" min="1" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>