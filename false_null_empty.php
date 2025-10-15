<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //false (true/false) - tipo de variável boolean
    //null e empty - valores especiais


    $funcionario1 = null;
    $funcionario2 = '';

    if ( is_null($funcionario1)){
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }
    echo '<br/>';
    if(is_null($funcionario2)){
        echo 'Sim, a variável é null';
    } else{
        echo 'Não, a variável não é null';
    }
    
    
    
    
    
    
    ?>
    
</body>
</html>