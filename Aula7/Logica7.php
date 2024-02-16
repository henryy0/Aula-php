<h3>
<?php
if($_POST) {
    $i = 0;
    $fim = $_POST['N1'];

    while ($i <= $fim) {
        echo $i . '-' ;
        $i++;
    }
}
?>
</h3>