<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
</head>
<body>
    <?php
        // $n1 = $_POST['N1'];
        // $n2 = $_POST['N2'];
        // $n3 = $_POST['N3'];
        // $n4 = $_POST['N4'];
        // $temp;
 
        // if ($n1 > $n2) {
        //     $temp = $n1;
        //     $n1 = $n2;
        //     $n2 = $temp;
        // }
        // if ($n1 > $n3) {
        //     $temp = $n1;
        //     $n1 = $n3;
        //     $n3 = $temp;
        // }
        // if ($n1 > $n4) {
        //     $temp = $n1;
        //     $n1 = $n4;
        //     $n4 = $temp;
        // }
        // if ($n2 > $n3) {
        //     $temp = $n2;
        //     $n2 = $n3;
        //     $n3 = $temp;
        // }
        // if ($n2 > $n4) {
        //     $temp = $n2;
        //     $n2 = $n4;
        //     $n4 = $temp;
        // }
        // if ($n3 > $n4) {
        //     $temp = $n3;
        //     $n3 = $n4;
        //     $n4 = $temp;
        // }
 
        // echo "Números ordenados: $n1, $n2, $n3, $n4";

        sort($_POST);
 
            foreach ($_POST as $estado) {
                echo $estado . " ";
            }
    ?>
</body>
</html>