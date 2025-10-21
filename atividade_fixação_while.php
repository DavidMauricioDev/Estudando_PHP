<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $numeros = array('50', '13', '6', '5','10');

    while(count($numeros) <= 5);{

        $num = rand(1,60);
            if(!in_array($num, $numeros)){
                $numeros[]= $num;    
            }
        }

    
        print_r($numeros);
    
    
    
    
    ?>
</body>
</html>