<?php

$valor = $_GET["v"];

$rq = sqrt($valor);

echo " A raiz quadradade de $valor é " .number_format($rq,2);
echo "<br/>";
?>
<br/>
<a href="form.html">Voltar</a>
