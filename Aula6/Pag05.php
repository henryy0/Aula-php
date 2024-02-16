<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio03</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
                // if($_POST){
                //     $Cp01=$_POST['ID'];
                //     $Cp02=$_POST['Nome'];
                //     $Cp03=$_POST['Data'];
                //     $Cp04=$_POST['Rua'];
                //     $Cp05=$_POST['Número'];
                //     $Cp06=$_POST['Complemento'];
                //     $Cp07=$_POST['CEP'];
                //     $Cp08=$_POST['Bairro'];
                //     $Cp09=$_POST['Cidade'];
                //     $Cp10=$_POST['Estado'];
                //     $Cp11=$_POST['País'];
                //     $Cp12=$_POST['Status'];
                //     $Cp13=$_POST['Observação'];
                   
                 
                //     if(empty($Cp01)){
                //      echo "A palavra (ID) não pode estar vazia.<br>";
                //     }
                //     else
                //     {
                //         echo $_POST['ID'];
                //     }
                //     if(empty($Cp02)){
                //         echo "A palavra (NOME) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp03)){
                //         echo "A palavra (DATA_DE_NASCIMENTO) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp04)){
                //         echo "A palavra (RUA) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp05)){
                //         echo "A palavra (NUMERO) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp06)){
                //         echo "A palavra (COMPLEMENTO) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp07)){
                //         echo "A palavra (CEP) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp08)){
                //         echo "A palavra (BAIRRO) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp09)){
                //         echo "A palavra (CIDADE) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp10)){
                //         echo "A palavra (ESTADO) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp11)){
                //         echo "A palavra (PAIS) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp12)){
                //         echo "A palavra (STATUS) não pode estar vazia.<br>";
                //        }
                //        if(empty($Cp13)){
                //         echo "A palavra (OBSERVACAO) não pode estar vazia.";
                //        }
                //        else {
                //          echo "Todos os campos foram preenchidos corretamente!";
                //       }
                //     }
                
                    // if($_POST){
                    //     $campos = array(
                    //         'ID' => 'A palavra (ID) não pode estar vazia.',
                    //         'Nome' => 'A palavra (NOME) não pode estar vazia.',
                    //         'Data' => 'A palavra (DATA_DE_NASCIMENTO) não pode estar vazia.',
                    //         'Rua' => 'A palavra (RUA) não pode estar vazia.',
                    //         'Número' => 'A palavra (NUMERO) não pode estar vazia.',
                    //         'Complemento' => 'A palavra (COMPLEMENTO) não pode estar vazia.',
                    //         'CEP' => 'A palavra (CEP) não pode estar vazia.',
                    //         'Bairro' => 'A palavra (BAIRRO) não pode estar vazia.',
                    //         'Cidade' => 'A palavra (CIDADE) não pode estar vazia.',
                    //         'Estado' => 'A palavra (ESTADO) não pode estar vazia.',
                    //         'País' => 'A palavra (PAIS) não pode estar vazia.',
                    //         'Status' => 'A palavra (STATUS) não pode estar vazia.',
                    //         'Observação' => 'A palavra (OBSERVACAO) não pode estar vazia.'
                    //     );
                    
                    //     foreach($campos as $campo => $mensagem) {
                    //         if(empty($_POST[$campo])){
                    //             echo $mensagem . "<br>";
                    //         } else {
                    //             echo $_POST[$campo];
                    //             echo "<br>";
                    //         }
                    //     }
                    // }

                    if ($_POST) {
                        $ID = $_POST['ID'];
                        $Nome = $_POST['Nome'];
                        $Data = $_POST['Data'];
                        $CEP = $_POST['CEP'];
                        $Rua = $_POST['Rua'];
                        $Número = $_POST['Número'];
                        $Complemento = $_POST['Complemento'];
                        $país = $_POST['País'];
                        $Estado = $_POST['Estado'];
                        $Cidade = $_POST['Cidade'];
                        $Bairro = $_POST['Bairro'];
                        $Observação = $_POST['Observação'];
                        $Status = $_POST['Status'];

                        if(empty($ID)){
                            echo "A palavra (ID) não pode estar vazia.<br>";
                           }
                           else
                           {
                               echo $_POST['ID'];
                           }
                           if(empty($Nome)){
                               echo "A palavra (NOME) não pode estar vazia.<br>";
                              }
                              if(empty($Data)){
                               echo "A palavra (DATA_DE_NASCIMENTO) não pode estar vazia.<br>";
                              }
                              if(empty( $Rua)){
                               echo "A palavra (RUA) não pode estar vazia.<br>";
                              }
                              if(empty($Número)){
                               echo "A palavra (NUMERO) não pode estar vazia.<br>";
                              }
                              if(empty($Complemento)){
                               echo "A palavra (COMPLEMENTO) não pode estar vazia.<br>";
                              }
                              if(empty( $CEP)){
                               echo "A palavra (CEP) não pode estar vazia.<br>";
                              }
                              if(empty($Bairro)){
                               echo "A palavra (BAIRRO) não pode estar vazia.<br>";
                              }
                              if(empty($Cidade)){
                               echo "A palavra (CIDADE) não pode estar vazia.<br>";
                              }
                              if(empty($Estado)){
                               echo "A palavra (ESTADO) não pode estar vazia.<br>";
                              }
                              if(empty($país)){
                               echo "A palavra (PAIS) não pode estar vazia.<br>";
                              }
                              if(empty($Status)){
                               echo "A palavra (STATUS) não pode estar vazia.<br>";
                              }
                              if(empty($Observação)){
                               echo "A palavra (OBSERVACAO) não pode estar vazia.";
                              }
                           }
                    
                ?>
            </div>
        </div>
    </div>
</body>
</html>