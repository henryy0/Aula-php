<div class="row">
    <div class="col-sm-12">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nomes</th>
                    <th scope="col">Bimestre 1</th>
                    <th scope="col">Bimestre 2</th>
                    <th scope="col">Bimestre 3</th>
                    <th scope="col">Bimestre 4</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['Random'])) {
                    $row = $_POST['Linhas'];
                    $col = 4; // número de colunas para os números aleatórios
                    // Lista de nomes
                    $nomes = ['Biscoitinho', 'bolacha', 'martinha', 'pedro', 'manteiga', 'fome'];

                    // Inicializa os totais da coluna
                    $total_coluna = array_fill(0, $col, 0);
                    $total_geral = 0;

                    // Loop para cada linha
                    for ($i = 1; $i <= $row; $i++) {
                        echo "<tr>";
                        // Escolhe um nome aleatório da lista de nomes
                        $nome_aleatorio = $nomes[array_rand($nomes)];
                        echo "<td>$nome_aleatorio</td>";

                        $total_linha = 0; // Inicializa o total para esta linha

                        // Loop para cada coluna com números aleatórios
                        for ($j = 1; $j <= $col; $j++) {
                            // Gera um número aleatório
                            $numero_aleatorio = rand(1, 100);
                            $total_linha += $numero_aleatorio; // Adiciona o número ao total da linha
                            $total_coluna[$j - 1] += $numero_aleatorio; // Adiciona o número ao total da coluna
                            // Exibe o número aleatório na célula da tabela
                            echo "<td>$numero_aleatorio</td>";
                        }

                        echo "<td>$total_linha</td>"; // Mostra o total da linha
                        echo "</tr>";
                    }

                    // Mostra o total de cada coluna
                    echo "<tr><td>Total Coluna</td>";
                    $total_geral = 0;
                    for ($j = 0; $j < $col; $j++) {
                        echo "<td>{$total_coluna[$j]}</td>";
                        $total_geral += $total_coluna[$j];
                    }
                    echo "<td>Total Geral: $total_geral</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
