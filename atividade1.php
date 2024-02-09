<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
    <form class="form-control" action="" method="post">
        <div class="row">
            <div class="col-sm-12">
                <h1>Atividade 1 - Calculo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <p>
                    <label for="n1">N1</label>
                </p>
                <p>
                    <input type="number" id="N1" name="N1" class="form-control">
                </p>
            </div>
            <div class="col-sm-6">
                <p>
                    <label for="n2">N2</label>
                </p>
                <p>
                    <input type="number" id="N2" name="N2" class="form-control">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button name="btomais" formaction="atividade1.php" class="btn btn-primary">+</button>
                <button name="btomenos"formaction="atividade1.php" class="btn btn-success">-</button>
                <button name="btodividir"formaction="atividade1.php" class="btn btn-info">/</button>
                <button name="btovezes" formaction="atividade1.php" class="btn btn-warning">x</button>
                <a href="atividade1.php" id="btolimpar" class="btn btn-danger">CE</a>
            </div>
        </div>
    </div>
    </form>

    <script src="js/bootstrap.js"></script>

    <?php include 'pag03.php'; ?>
</body>
</html>
