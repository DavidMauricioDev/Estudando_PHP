<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php 
     /*   
        $numero1 = 98;
        $numero2 = 6;
        
        
        if($numero1>$numero2){
            echo "O número $numero1 é maior que o número $numero2" ;
        }else{
            echo 'Tente novamente mais tarde';
        }*/

       $usuario_possui_cartao_loja = true;
       $valor_compra = 67;
    
       $valor_frete = 50;
       $recebeu_desconto_frete = true;

       if($usuario_possui_cartao_loja == true && $valor_compra >= 400){
          $valor_frete = 0;
          $recebeu_desconto_frete = true;

       }else if($usuario_possui_cartao_loja == true && $valor_compra >= 300){
          $valor_frete = 10;
          $recebeu_desconto_frete = true;
          
       }else if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
          $valor_frete = 25;
          $recebeu_desconto_frete = true;
       }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
            if($usuario_possui_cartao_loja == true) {
                echo 'SIM';
            } else {
                echo 'NãO';
            }   
        ?>
     </p>

     <p>Valor da compra: <?=$valor_compra?></p>

     <p>Recebeu desconto no frete?
        <?php
            if($usuario_possui_cartao_loja == true) {
                echo 'SIM';
            } else {
                echo 'NãO';
            }   
        ?>
     </p>
     <p>Valor do frete: <?=$valor_frete?></p>
     <p>Valor do total: <?=$valor_frete + $valor_compra?></p>






</body>
</html>
