<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de juros</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
        <div class="container"> 
        <form class="form-control" action="" method="post"> 
            <div class="row"> 
                <div class="col-sm-12"> 
                    <h1>Calculadora de Juros</h1>
                </div> 
            </div> 
            <div class="row"> 
            <div class="col-sm-3">
                <p>
                    <label for="valorInicial">Valor Inicial:</label>
                </p>
                <p>
                <input type="number" id="valorInicial" name="valorInicial" class="form-control">
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <label for="valorMensal">Valor Aplicado Mensalmente:</label>
                </p>
                <p>
                    <input type="number" id="valorMensal" name="valorMensal"  class="form-control">
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <label for="jurosAnual">Taxa de Juros Anual (%):</label>
                </p>
                <p>
                    <input type="number" id="jurosAnual" name="jurosAnual" class="form-control">
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <label for="tempoAnos">Tempo (anos):</label>
                </p>
                <p>
                    <input type="number" id="tempoAnos" name="tempoAnos" class="form-control">
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button name="Calcular" formaction="aula11.php" class="btn btn-success">Calcular</button>
                </div>
            </div>
        </form> 

        
    <script src="../js/bootstrap.js"></script>

        <?php include_once("logica11.php"); ?>
</body>
</html>