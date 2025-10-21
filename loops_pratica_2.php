<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    /* $funcionarios = array ('João','Maria','Júlia');

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';*/




    $funcionarios = array(
        array('nome' => 'joão', 'salario' => 2500),
        array('nome' => 'maria', 'salario' => 3500),
        array('nome' => 'júlia', 'salario' => 1500),
    );

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    foreach ($funcionarios as $idx => $funcionario) {
        echo '<pre>';
        print_r($funcionario);
        echo '</pre>';
        //echo " ID $idx - Nome: $nome_funcionario <br/>"; 
    }


    ?>
</body>

</html>