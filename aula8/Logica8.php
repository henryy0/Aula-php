<h3>
<?php
if($_POST) {
    $i = 0;
    $fim = $_POST['N1'];

    if (isset($_POST['While'])) {
        while ($i <= $fim) {
            echo $i . '-';
            $i++;
        }
    } 
    if (isset($_POST['Do'])) {
        do {
            echo $i . '-';
            $i++;
        } while ($i <= $fim);
    }
    if (isset($_POST['For'])) {
        $fim = $_POST['N1'];

        for ($i = 0; $i <=  $fim; $i++) {
            echo $i . '-';
        } 
    } 
}
?>
</h3>
