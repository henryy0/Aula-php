<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os valores do formulário
    $valorInicial = $_POST["valorInicial"];
    $valorMensal = $_POST["valorMensal"];
    $jurosAnual = $_POST["jurosAnual"];
    $tempoAnos = $_POST["tempoAnos"];

    // Converte a taxa de juros de percentual para decimal
    $jurosDecimal = $jurosAnual / 100;

    // Inicializa a matriz para armazenar os montantes acumulados
    $montantes = array();

    // Calcula o montante para cada mês e armazena na matriz
    for ($ano = 1; $ano <= $tempoAnos; $ano++) {
        for ($mes = 1; $mes <= 12; $mes++) {
            // Calcula o montante para este mês
            $mesesDecorridos = ($ano - 1) * 12 + $mes;
            $montanteMes = $valorInicial * (1 + $jurosDecimal) ** $mesesDecorridos;
            $montanteMes += $valorMensal * (((1 + $jurosDecimal) ** $mesesDecorridos - 1) / $jurosDecimal);

            // Arredonda o montante para duas casas decimais
            $montanteMes = round($montanteMes, 2);

            // Armazena o montante deste mês na matriz
            $montantes[$ano][$mes] = $montanteMes;
        }
    }

    // Exibe o resultado em forma de tabela
    echo "<div class='alert alert-info' role='alert'>";
    echo "<h4>Montante acumulado mês a mês:</h4>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Ano</th>";
    for ($mes = 1; $mes <= 12; $mes++) {
        echo "<th>Mês $mes</th>";
    }
    echo "</tr></thead><tbody>";
    foreach ($montantes as $ano => $meses) {
        echo "<tr><td>Ano $ano</td>";
        foreach ($meses as $montante) {
            echo "<td>R$ $montante</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    echo "</div>";
}
?>
