<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular ISS</title>
</head>
<body>
    <?php
    $cidade_nome = "Recife";
    $valor_servico = 1000.00;
    
    if(empty($cidade_nome) || $valor_servico <=0){
        echo "Cidade ou valor do serviço não informados";
    }
    

    if($cidade_nome == "Recife"){
        $aliquota = 0.05;
    }else if($cidade_nome == "Olinda"){
        $aliquota = 0.045;
    }else if($cidade_nome == "Jaboatão"){
        $aliquota = 0.035;
    } else{
        $aliquota = 0.02;
    }
   
    //caluclo
    $valor_iss = $valor_servico * $aliquota;
    $valor_liquido = $valor_servico - $valor_iss;


    // saida de resultados com formatação
    echo "Cidade: $cidade_nome<br>";
    echo "Valor Bruto: R$ $valor_servico<br>";
    echo "ISS (" . ($aliquota * 100) . "%): R$ " . number_format($valor_iss, 2, ',', '.') . "<br>";
    echo "Valor Líquido: R$ " . number_format($valor_liquido, 2, ',', '.');
 ?>
    


    

</body>
</html>