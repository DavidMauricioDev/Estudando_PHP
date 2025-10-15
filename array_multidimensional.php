<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   //$listas_coisas = array(); 
   $lista_coisas = [];
    


    $lista_coisas['frutas'] = [1 =>'banana', 2 => 'morango', 3 => 'laranja']; 
    $lista_coisas['pessoas'] = [ 1 => 'David', 2 => 'Victor', 3 => 'Rodrigo'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';
    echo $lista_coisas['frutas'][3];
    echo '<br/>';
    echo $lista_coisas['pessoas'][2];
    
    
    
    ?>
    
</body>
</html>