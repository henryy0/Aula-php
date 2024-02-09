<div class="container">
    <div class="row">
        <div class="col">
            <?php 
            if($_POST){
                $n1 = $_POST['N1']; 
                $n2 = $_POST['N2']; 
                $n3 = $_POST['N3']; 
                $n4 = $_POST['N4']; 
                $media = 0;
                $cor = " ";
                $media = ($n1 + $n2 + $n3 + $n4)/4;

                if($media >= 7){
                    echo "Aprovado";
                    $cor = "Green";
                }
                elseif ($media > 5 && $media < 7) {
                    echo "Exame";
                    $cor = "Yellow";
                }
                elseif ($media <= 5){
                    echo "Reprovado";
                    $cor = "Red";
                }
                elseif ($media < 0 || $media > 10){
                    echo "Número Inválido";
                }
                else{
                    echo "Erro";
                }

                echo "<h2 style='background-color:$cor;'> Média: ".$media."</h2>";

            }
            ?>
        </div>
    </div>
</div>
