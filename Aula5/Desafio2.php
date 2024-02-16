<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Ordem Crescente</title> 
    <link rel="stylesheet" href="../css/bootstrap.css"> 
</head> 
<body> 
    <div class="container"> 
        <form class="form-control" action="" method="post"> 
            <div class="row"> 
                <div class="col-sm-12"> 
                    <h1>Desafio Ordem Crescente</h1> 
                </div> 
            </div> 
            <div class="row"> 
            <div class="col-sm-3">
                <p>
                    <label for="n1">N1</label>
                </p>
                <p>
                    <input type="number" id="N1" name="N1" class="form-control">
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <label for="n2">N2</label>
                </p>
                <p>
                    <input type="number" id="N2" name="N2" class="form-control">
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <label for="n3">N3</label>
                </p>
                <p>
                    <input type="number" id="N3" name="N3" class="form-control">
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <label for="n4">N4</label>
                </p>
                <p>
                    <input type="number" id="N4" name="N4" class="form-control">
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="total" style="background-color: gray; height: 200px; width: 100%;">
                    <?php include_once("logica2.php"); ?>
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-12"> 
                    <button name="OK" formaction="Desafio2.php" class="btn btn-primary">Ok</button> 
                    <a href="Desafio2.php" id="btolimpar" class="btn btn-danger">Limpar</a> 
                </div> 
            </div> 
        </form> 
        <script src="../js/bootstrap.js"></script>  
    </div> 
</body> 
</html>


