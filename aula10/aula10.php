<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="Logica10.php" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Desafio</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <table class="table">
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
                            <tr>
                                <td colspan="6">
                                    <?php include 'Logica10.php'; ?>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="row">Total</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="col-sm-12">
                        <p>
                            <label for="Linhas">Digite a quantidade de Linhas</label>
                        </p>
                        <p>
                            <input type="number" id="Linhas" name="Linhas" class="form-control">
                        </p>
                        <div class="row">
                            <div class="col-sm-12">
                                <button name="Random" formaction="aula10.php" class="btn btn-success">Random</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
