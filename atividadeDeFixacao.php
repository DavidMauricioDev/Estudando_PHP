<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$idade = 34;
$peso = 89.6;

?>

<h1><b>Verificação de aptidão para doar sangue</b></h1>

<p>Idade: <?= $idade?></p>
<p>Peso: <?= $peso?></p>


<?php
if($idade >= 16 && $idade <= 69 && $peso >= 50){            
    echo "Você está apto a doar sangue!";
} else {
    "Você não atende aos requesitos!";
}

?>





</body>
</html>