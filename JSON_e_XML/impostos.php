<?php
//json no PHP - decode e encode
echo '<pre>';

//printa na tela o conteúdo do arquivo impostos.json
$impostosJson = file_get_contents('impostos.json');

print_r($impostosJson);


//decodefica o jason e retorna um objeto PHP
$impostosJsondecode = json_decode($impostosJson, true); //CONVERTE PARA ARRAY ASSOCIATIVO

print_r($impostosJsondecode);

function calcularImpostos($array){

    return array_sum($array['impostos']);

}

echo "empresa: " . $dados['empresa'] . "\n";






?>