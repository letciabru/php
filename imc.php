<!DOCTYPE html>
<html Lang= "pt-br">
<head>
    <meta charset="UTF-8">
    <title>IMC simples</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>

    <form method="post">
        peso(kg): <input type= "number" name= "peso"
        step="0.1" required><br><br>
        altura(m): <input type= "number" name= "altura"
        step="0.1" required><br><br>
        <input type="submit" value="Calcular IMC
</form>

<?php
if ($_server["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<p> seu IMC é: <strong>" . number_format
            (num: $imc, decimals: 2) . "</strong></p>";

            if ($imc < 18.5) {
                echo "<p>Classificação: abaixo do peso</p>";
            } elseif ($imc < 25) {
                echo "<p>Classificação: peso normal</p>";
            } elseif ($imc < 30) {
                echo "<p>Classificação: sobrepeso</p>";
            } else {
                echo "<p>Classificação: obesidade</p>";
            }
            
            ?>
        </body>
        </html>


        }

}