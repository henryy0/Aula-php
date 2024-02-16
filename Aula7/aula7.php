<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<div class="container">
    <form class="form-control" action="" method="post">
        <div class="row">
            <div class="col-sm-12">
                <h1>While</h1>
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
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button name="btoOK" formaction="aula7.php" class="btn btn-success">Ok</button>
            </div>
        </div>
    </div>
    <div class="Resultado text-center">
        <div class="col-sm-12">
        <?php include 'Logica7.php'; ?>
        </div>
    </div>
    </form>

    <script src="../js/bootstrap.js"></script>

   
<body>

</body>
</html>