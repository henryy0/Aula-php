<div class="container">
    <div class="row">
        <div class="col">
            <?php 
            if($_POST){
                $n1 = $_POST['N1']; 
                $n2 = $_POST['N2']; 
                $total = 0;

                if(isset($_POST['btomais'])){
                    $total = $n1 + $n2;
                }
                elseif(isset($_POST['btomenos'])){
                    $total = $n1 - $n2;
                }
                elseif(isset($_POST['btovezes'])){
                    $total = $n1 * $n2;
                }
                elseif(isset($_POST['btodividir'])){
                    $total = $n1 / $n2;
                }
                else{
                    echo ("erro");
                }
                
                echo ("O resultado da operação é: " . $total);
            }
            ?>
        </div>
    </div>
</div>
