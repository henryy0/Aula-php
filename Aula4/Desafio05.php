<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['OK'])){ 

        $Quantidade = $_POST['Quantidade']; 
        $Valor = $_POST['Valor']; 
        $Pagamento = $_POST['Pagamento']; 

        $total = $Quantidade * $Valor; 
        $totalr = $total; 

        if ($Pagamento == 'Dinheiro') { 
            $totalr = $total * 0.9; 
        } elseif ($Pagamento == 'Pix') { 
            $totalr = $total * 0.95; 
        } elseif ($Pagamento == 'Debito') { 
            $totalr = $total; 
        } elseif ($Pagamento == 'Credito') { 
            $totalr = $total * 1.08; 
        } elseif ($Pagamento == 'Boleto') { 
            $totalr = $total * 1.1 + 5; 
        } 
        
        echo 'Total: R$' . number_format($total, 2, ',', '.') . '<br>'; 
        echo 'Total com ajustos: R$' . number_format($totalr, 2, ',', '.'); 
    } 
    ?>
</body>
</html>
