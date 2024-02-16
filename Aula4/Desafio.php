<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Atividade 3</title> 
    <link rel="stylesheet" href="../css/bootstrap.css"> 
</head> 
<body> 
    <div class="container"> 
        <form class="form-control" action="" method="post"> 
            <div class="row"> 
                <div class="col-sm-12"> 
                    <h1>Desafio Sistema de compras</h1> 
                </div> 
            </div> 
            <div class="row"> 
                <div class="col-sm-3"> 
                    <p> <label for="Produto">Produto</label> </p> 
                    <p> <input type="text" id="Produto" name="Produto" class="form-control"> </p> 
                </div> 
                <div class="col-sm-3"> 
                    <p> <label for="fQuantidade">Quantidade</label> </p> 
                    <p> <input type="number" id="Quantidade" name="Quantidade" class="form-control" min="0"> </p> 
                </div> 
                <div class="col-sm-3"> 
                    <p> <label for="Valor u">V.unitário</label> </p> 
                    <p> <input type="number" id="Valor" name="Valor" class="form-control" min="0"> </p> 
                </div> 
                <div class="col-sm-3"> 
                    <p> <label for="fPagamento">Forma pgto</label> </p> 
                    <p> 
                        <select name="Pagamento" class="form-control" readonly> 
                            <option value="Dinheiro">Dinheiro</option> 
                            <option value="Pix">Pix</option> 
                            <option value="Debito">Débito</option> 
                            <option value="Credito">Crédito</option> 
                            <option value="Boleto">Boleto</option> 
                        </select> 
                    </p> 
                </div> 
            </div> 
            <div class="row">
                <div class="col-sm-12">
                    <div id="total" style="background-color: gray; height: 200px; width: 100%;">
                    <?php include_once("Desafio05.php"); ?>
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-12"> 
                    <button name="OK" formaction="Desafio.php" class="btn btn-primary">Ok</button> 
                    <a href="Desafio.php" id="btolimpar" class="btn btn-danger">Limpar</a> 
                </div> 
            </div> 
        </form> 
        <script src="../js/bootstrap.js"></script>  
    </div> 
</body> 
</html>


