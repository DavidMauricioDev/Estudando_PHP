<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folha de Pagamento</title>
</head>
<body>

<?php
$totalFuncionarios = 0;
$totalPago = 0.0;

while (true) {
    echo "Nome: ";
    $nome = trim(fgets(STDIN));

    if (strtolower($nome) === "fim") {
        break;
    }

    echo "Salário: ";
    $salario = (float) trim(fgets(STDIN));

    $totalFuncionarios++;
    $totalPago += $salario;
}

if ($totalFuncionarios > 0) {
    $mediaSalarial = $totalPago / $totalFuncionarios;

    echo "\nTotal de funcionários: $totalFuncionarios\n";
    echo "Total pago: R$ " . number_format($totalPago, 2, ',', '.') . "\n";
    echo "Média salarial: R$ " . number_format($mediaSalarial, 2, ',', '.') . "\n";
} else {
    echo "\nNenhum funcionário cadastrado.\n";
}
?>
    
</body>
</html>