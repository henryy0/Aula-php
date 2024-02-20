<div class="row">
    <div class="col-sm-12">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Nomes</th>
                    <th>Bimestro 01</th>
                    <th>Bimestro 02</th>
                    <th>Bimestro 03</th>
                    <th>Bimestro 04</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totais = array(0, 0, 0, 0, 0); // Total Final

                if ($_POST) {
                    foreach (range(1, $_POST['Linhas']) as $i) {
                        $valores = array(
                            rand(500, 5000),
                            rand(500, 5000),
                            rand(500, 5000),
                            rand(500, 5000)
                        );

                        // Atualização dos totais
                        foreach ($valores as $index => $valor) {
                            $totais[$index] += $valor;
                        }

                        $totalL = array_sum($valores); // Total Linear

                        $totais[4] += $totalL; // Total Final

                        // Saída da linha da tabela
                        echo '
                        <tr>
                            <td>Nome-' . $i . '</td>
                            <td>' . $valores[0] . '</td>
                            <td>' . $valores[1] . '</td>
                            <td>' . $valores[2] . '</td>
                            <td>' . $valores[3] . '</td>
                            <td>' . $totalL . '</td>
                        </tr>
                        ';
                    }
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <?php
                    // Saída dos totais no rodapé da tabela
                    foreach ($totais as $total) {
                        echo '<td>' . $total . '</td>';
                    }
                    ?>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
