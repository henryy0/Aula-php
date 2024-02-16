<?php
if (isset($_POST['Random'])) {
    $row = $_POST['Linhas'];
    $col = 4; // número de colunas para os números aleatórios
    // Lista de nomes
    $nomes = ['Biscoitinho', 'bolacha', 'martinha', 'pedro', 'manteiga', 'fome'];

    // Loop para cada linha
    for ($i = 1; $i <= $row; $i++) {
        echo "<tr>";
        // Escolhe um nome aleatório da lista de nomes
        $nome_aleatorio = $nomes[array_rand($nomes)];
        echo "<td>$nome_aleatorio</td>";

        $total = 0; // Inicializa o total para esta linha

        // Loop para cada coluna com números aleatórios
        for ($j = 1; $j <= $col; $j++) {
            // Gera um número aleatório
            $numero_aleatorio = rand(1, 100);
            $total += $numero_aleatorio; // Adiciona o número ao total
            // Exibe o número aleatório na célula da tabela
            echo "<td>$numero_aleatorio</td>";
        }

        echo "<td> $total</td>";

        echo "</tr>";
    }
}
?>
