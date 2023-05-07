<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="POST" action="calcular.php">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1"><br><br>
        <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2"><br><br>
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
