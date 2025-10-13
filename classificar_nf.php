<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificar</title>
</head>
<body>

<?php
 $valorNota = 1850;

 
 echo "Valor da nota: R$" .number_format($valorNota, 2, ',', '.');
 echo "<br/>";
 echo "Categoria: ";
 
 
 if ($valorNota <=500){
 echo "A nota tem valor pequeno <br>";
 echo "Situação: Não precisa de aprovação manual <br>";
 } elseif($valorNota >= 501 && $valorNota <= 2000){
 echo "A nota tem valor médio <br>";
 echo "Situação: Necessita aprovação manual <br>";
 } else {
 echo "A nota tem valor alto"; 
 echo "Situação: Necessita aprovação manual <br>";
 }
 
 

?>



    
</body>
</html>