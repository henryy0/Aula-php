<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <div class="container">
        <form class="form-control" action="" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário Simples</h1>
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="txtnome">Informe seu nome</label>
                    </p>
                    <p>
                        <input type="text" id="txtnome" name="txtnome" class="form-control">
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="txtsobrenome">Informe seu sobrenome</label>
                    </p>
                    <p>
                        <input type="text" id="txtsobrenome" name="txtsobrenome" class="form-control">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>&nbsp;</p>
                    <p>
                        <button type="submit" class="btn btn-success m-3">Enviar</button>
                        <a href="pag02.php" class="btn btn-danger">Limpar</a>
                    </p>
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <?php
                if($_POST){
                    $nome = $_POST['txtnome']; 
                    $sobrenome = $_POST['txtsobrenome']; 

                    echo "Seu nome é " . $nome . " " . $sobrenome;
                }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
