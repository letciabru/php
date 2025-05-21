<!DOCTYPE html>
<html Lang= "pt-br">
<head>
    <meta charset="UTF-8">
    <title>consumo de combustivel</title>
</head>
<body>
    <h2>calculadora de combustivel</h2>

<form method="post">
    Nome do Condutor: <input type="text" name="nome_condutor" required><br><br>
    Distância percorrida (km): <input type="number" name="distancia_percorrida" step="0.1" required><br><br>
    Combustível gasto (litros): <input type="number" name="combustivel_gasto" step="0.1" required><br><br>
    <input type="submit" value="Calcular Consumo Médio">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome_condutor = $_POST["nome_condutor"];
    $distancia_percorrida = $_POST["distancia_percorrida"];
    $combustivel_gasto = $_POST["combustivel_gasto"];

    // Verificando se a distância e o combustível gasto são maiores que zero
    if ($distancia_percorrida > 0 && $combustivel_gasto > 0) {
        // Calculando o consumo médio
        $consumo_medio = $distancia_percorrida / $combustivel_gasto;

        // Determinando a classificação do consumo
        if ($consumo_medio <= 8) {
            $classificacao = "Alto consumo";
        } elseif ($consumo_medio > 8 && $consumo_medio <= 14) {
            $classificacao = "Consumo moderado";
        } else {
            $classificacao = "Bom consumo";
        }

        // Exibindo os resultados com 2 casas decimais
        echo "<p>Nome do Condutor: <strong>" . $nome_condutor . "</strong></p>";
        echo "<p>Distância percorrida: <strong>" . number_format($distancia_percorrida, 2) . " km</strong></p>";
        echo "<p>Combustível gasto: <strong>" . number_format($combustivel_gasto, 2) . " litros</strong></p>";
        echo "<p>Consumo médio: <strong>" . number_format($consumo_medio, 2) . " km/l</strong></p>";
        echo "<p>Classificação de consumo: <strong>" . $classificacao . "</strong></p>";
    } else {
        echo "<p>Por favor, insira valores válidos para distância e combustível.</p>";
    }
}
?>