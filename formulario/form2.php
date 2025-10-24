

<?php
$nome = $_GET["nome"];
$ano = $_GET["ano"];
$sexo = $_GET["sexo"];
$idade = date("Y") - $ano;

echo "Olá $nome </br>";  
echo "Sua idade é: $idade e seu sexo é $sexo";

?>
</br>
<a href="form2.html">Voltar</a>







