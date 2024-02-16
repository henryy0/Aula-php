<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<div class="container">
    <form class="form-control" action="" method="post">
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
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                <th scope="row">Total</th>
                </tr>
            </tfoot>
            </table>
            </div>
            <div class="col-sm-12">
                <p>
                    <label for="Linhas">Digite a quantidade de Linhas</label>
                </p>
                <p>
                    <input type="number" id="Linhas" name="Linhas" class="form-control">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button name="Random" formaction="aula8.php" class="btn btn-success">Random</button>
            </div>
        </div>
    </div>
    <div class="Resultado text-center">
        <div class="col-sm-12">
        <?php include 'Logica9.php'; ?>
        </div>
    </div>
    </form>

    <script src="../js/bootstrap.js"></script>

   
<body>

</body>
</html>