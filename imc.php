<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC Simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Calculadora de IMC</h2>

    <form method="post">
        Peso (kg): <input type="number" name="peso" step="0.1" required><br><br>
        Altura (m): <input type="number" name="altura" step="0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: <strong>" . number_format($imc, 2) . "</strong></p>";

            if ($imc < 18.5) {
                echo "<p>Classificação: Abaixo do peso</p>";
            } elseif ($imc < 25) {
                echo "<p>Classificação: Peso normal</p>";
            } elseif ($imc < 30) {
                echo "<p>Classificação: Sobrepeso</p>";
            } else {
                echo "<p>Classificação: Obesidade</p>";
            }
        } else {
            echo "<p>Altura inválida.</p>";
        }
    }
    ?>

</body>
</html>
