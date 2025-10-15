<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$valores = array(1200, -350, 890, -500, 100);

$totalReceitas = 0;
$totalDespesas = 0;


foreach ($valores as $valor) {
    if ($valor > 0) {
        $totalReceitas += $valor; 
    } else {
        $totalDespesas += $valor; 
    }
}



sort($valores); // Ordena do menor para o maior

foreach ($valores as $valor) {
    echo $valor . "<br>";
}
echo "<hr>";
$saldoFinal = $totalReceitas + $totalDespesas;


echo "total de receitas: R$ " . number_format($totalReceitas, 2, ',', '.') . "<br>";
echo " total de despesas: R$ " . number_format($totalDespesas, 2, ',', '.') . "<br>";
echo "saldo final: R$ " . number_format($saldoFinal, 2, ',', '.') . "<br>";







?>


</body>
</html>