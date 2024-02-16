<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php include_once("pag05.php"); ?>
    <div class="container">
        <form action="Desafio3.php" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Cadastro</h1>
                </div>
                <div class="row">
                    <div class="col-sm-1">
                        <p>
                            <label for="ID">ID</label>
                            <input type="number" id="ID" name="ID" class="form-control" value="<?= $ID ?>">
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <p>
                            <label for="Nome">Nome</label>
                            <input type="text" id="Nome" name="Nome" class="form-control" value="<?= $Nome ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <label for="Data">Data Nascimento</label>
                            <input type="date" id="Data" name="Data" class="form-control" value="<?= $Data ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <label for="CEP">CEP</label>
                            <input type="text" id="CEP" name="CEP" class="form-control" value="<?= $CEP ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <label for="Rua">Rua</label>
                            <input type="text" id="Rua" name="Rua" class="form-control" value="<?= $Rua ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <label for="Número">Número</label>
                            <input type="number" id="Número" name="Número" class="form-control" value="<?= $Número ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <label for="Complemento">Complemento</label>
                            <input type="text" id="Complemento" name="Complemento" class="form-control" value="<?= $Complemento ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <label for="País">País</label> 
                        <p> 
                        <select name="País" class="form-control" readonly> 
                            <option value="br" <?= $país === "br" ? "selected" : "" ?>>Brasil</option> 
                            <option value="ar" <?= $país === "ar" ? "selected" : "" ?>>Argetina</option> 
                            <option value="ho" <?= $país === "ho" ? "selected" : "" ?>>Holanda</option> 
                            <option value="ru" <?= $país === "ru" ? "selected" : "" ?>>Russia</option> 
                            <option value="ca" <?= $país === "ca" ? "selected" : "" ?>>Canadá</option> 
                        </select>
                        </p> 
                    </div>
                    <div class="col-sm-3">
                        <label for="Estado">Estado</label> 
                        <p> 
                            <select name="Estado" class="form-control" readonly> 
                                <option value="Sp" <?= $Estado === "Sp" ? "selected" : "" ?>>São paulo</option> 
                                <option value="Mg" <?= $Estado === "Mg" ? "selected" : "" ?>>Minas Gerais</option> 
                                <option value="Rj" <?= $Estado === "Rj" ? "selected" : "" ?>>Rio de Janeiro</option> 
                                <option value="Ba" <?= $Estado === "Ba" ? "selected" : "" ?>>Bahia</option> 
                                <option value="Pr" <?= $Estado === "Pr" ? "selected" : "" ?>>Paraná</option> 
                            </select> 
                        </p> 
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <label for="Cidade">Cidade</label>
                            <input type="text" id="Cidade" name="Cidade" class="form-control" value="<?= $Cidade ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <p>
                            <label for="Bairro">Bairro</label>
                            <input type="text" id="Bairro" name="Bairro" class="form-control" value="<?= $Bairro ?>">
                        </p>
                    </div>
                    <div class="col-sm-3">
                    <label for="Status">Status</label> 
                        <p> 
                            <select name="Status" class="form-control" readonly> 
                                <option value="Ativo" <?= $Status === "Ativo" ? "selected" : "" ?>>Ativo</option> 
                                <option value="Inativo" <?= $Status === "Inativo" ? "selected" : "" ?>>Inativo</option> 
                            </select> 
                        </p> 
                    </div>
                    <div class="col-sm-12">
                        <p>
                            <label for="Observação">Observação</label>
                            <textarea id="Observação" name="Observação" rows="5" class="form-control"><?= $Observação ?></textarea>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>&nbsp;</p>
                        <button type="submit" name="Cadastrar" class="btn btn-success">Cadastrar</button>
                        <a href="Desafio3.php" id="btolimpar" class="btn btn-danger">Limpar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
