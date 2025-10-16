<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    /* $array = 'String';
    $retorno = is_array($array);

    if($retorno){
        echo 'Sim, é um array';
    } else{
        echo 'Não, não é um array';
    }*/

    /*$array = [1 => 'a', 7 => 'b', 18 =>'c' ];
    echo '<pre>';
         print_r($array);
    echo '</pre>';
    
   
   //array_keys(array) -> Retorna todas as chaves de um array;
    $chaves_array = array_keys($array); 
    echo '<pre>';
        print_r($chaves_array);
    echo '</pre>';*/

    //sort(array) -> Ordena um array e reajusta seus índices;
    /* 
    $array = array('teclado','mouse', 'cabo hdmi','gabinete', 'fonte ATX','notebook');
     echo '<pre>';
        print_r($array);
     echo '</pre>';   

     sort($array);
     echo '<pre>';
       print_r($array);
     echo '</pre>'; 
     */

    /*
     $array = array('teclado','mouse', 'cabo hdmi','gabinete', 'fonte ATX','notebook');
     echo '<pre>';
        print_r($array);
     echo '</pre>';   

     asort($array);
     echo '<pre>';
       print_r($array);
     echo '</pre>';
     */
    /*
     $array = array('teclado','mouse', 'cabo hdmi','gabinete', 'fonte ATX','notebook');
     echo '<pre>';
        print_r($array);
        echo count($array);
     echo '</pre>';
     */


    $array1 = ['osx', 'windows'];
    $array2 = array('linux');
    $array3 = ['solaris'];
    //Funde um ou mais arrays;
    $novo_array = array_merge($array1, $array2,$array3);
    echo '<pre>';
     print_r($novo_array);
    echo '</pre>';






    ?>
</body>

</html>