<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    //sequencial ( númerico)
    $lista_fruta = array('pera', 'uva', 'maçã', 'abacaxi');
    //$lista_fruta = ['pera', 'uva', 'maça', 'abacaxi']; pode ser escrito dessa forma
    
    /*$lista_fruta[] = 'manga';
    echo '<pre>';
    var_dump($lista_fruta);
    echo '</pre>';
    echo '<hr/>';
    echo '<pre>';
    print_r($lista_fruta);
    echo '</pre>';
    */
    //echo $lista_fruta[2]; // usa pra imprimir na tela um item especifico da lista.





    //associativo ( )
    $lista_fruta = array(
    'a' => 'pera', 
    'b' =>'uva', 
    'c' =>'maça', 
    'd' =>'abacaxi');

    $lista_fruta['w'] = 'laranja';
    echo '<pre>';
    var_dump($lista_fruta);
    echo '<pre/>';

    $lista_fruta['w'] = 'laranja';
    echo $lista_fruta['w'];
    
    
    ?>
</body>
</html>