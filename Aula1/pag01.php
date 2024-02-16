<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <h2>Primeira Aula php</h2>
    <?php 
        date_default_timezone_set('America/Sao_Paulo');

        $nome = "Henrique";
        $sobrenome = "Nery";
        $idade = 19;
        
        echo "<hr>";
        echo "<h2>Olá Mundo!</h2>";
        echo "<p>Olá Mundo!</p>";
        echo "<hr>";
        echo date('d/m/Y');
        echo "<br>";
        echo date('H:i:s');
        echo "<hr>";
        echo "Seu nome completo é <b>" . $nome . " " . $sobrenome . "</b>. Minha idade é " . $idade;

    ?>

    <script src="../js/bootstrap.js"></script>
</body>
</html>
