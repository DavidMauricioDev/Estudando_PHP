<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas</title>
</head>
<body>
    <?php
    //recuperação de data atual(datacorrente)

    echo date('Y-m-d H:i:s').'<br/>';
    
    date_default_timezone_set('America/Sao_Paulo');
    echo '<br/>';
    echo date('Y-m-d H:i:s');

    
    
    
    
    
    ?>
</body>
</html>