<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $clientes = [
        "Supermercado São João" => 12500,
        "Padaria Pão Quente" => 7400,
        "Loja Estilo Modas" => 9200,
    ];
    
    arsort($clientes);
    
   foreach($clientes as $chave => $valor){
    echo "$chave: $valor <br>";
   }


   echo '<hr>';

   $total = array_sum($clientes);
   echo "Faturamento total das empresas: ".number_format($total, 2, ',', '.') . "<br>";
   echo '<hr>';

   $maior_faturamento = max($clientes);
   $indice_maior = array_search($maior_faturamento, $clientes);

   echo "A empresa com maior faturamento é: $indice_maior<br>";
   echo "O valor é: $maior_faturamento";










    ?>
</body>

</html>