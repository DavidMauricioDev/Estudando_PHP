<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções</title>
</head>
<body>
    <?php //função Void - não retorna valor
     function exibirBoasVindas(){
        echo "Seja em vindo ao mundo do PHP! <br/>";
     }

     exibirBoasVindas();
    
     //Função com retorno
        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularAreaTerreno(37.5,70);
        echo "<br/>";
        echo calcularAreaTerreno(30,70);
        echo "<br/>";
        echo calcularAreaTerreno(32.5,70);
        echo "<br/>";
        echo calcularAreaTerreno(10,70);
        echo "<br/>";
        echo calcularAreaTerreno(15.5,70);

       
       //armazenando a função estabelecida em uma variável
        $areaTerreno = calcularAreaTerreno(15.5,70);
        echo "<br/>";

        echo "a área do terreno da casa de David é $areaTerreno m²";
    
    
    ?>
</body>
</html>