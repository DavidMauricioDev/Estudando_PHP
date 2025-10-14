<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $texto = 'David Mauricio';

    //converte para caixa baixa
    echo $texto ;
    echo "<br/>";
    echo strtolower($texto);

    echo '<hr/>';

    //converte para caixa alta
    echo $texto ;
    echo "<br/>";
    echo strtoupper($texto);

    echo '<hr/>';
//primeiro caracter maiusculo
    echo $texto ;
    echo "<br/>";
    echo ucfirst($texto);

echo '<hr/>';
//conta caractere
    echo $texto ;
    echo "<br/>";
    echo strlen($texto);
    
    echo '<hr/>';
//string replace / case sensitive, ou seja, considera caracteres maiusculos ou minisculos
    echo $texto ;
    echo "<br/>";
    echo str_replace('Mauricio', 'Silva', $texto);

    echo '<hr/>';
//
    echo $texto ;
    echo "<br/>";
    //David Mauricio
    echo substr($texto,6 ,13);
    
    
    
    ?>
</body>
</html>