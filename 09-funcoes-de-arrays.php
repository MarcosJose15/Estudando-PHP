<?php
/*
[is_array]($array) = verificar se uma determinada variável é um array
[in_array]($valor, $array) = verifica se um determinado valor existe em alguma posição do array
[array_keys]($array) = retorna um novo array com as chaves do array passado como parâmetro
[array_values]($array) = retorna um novo array com os valores do array passado como parâmetro
[array_merge]($array1, $array2) = agrega o conteúdo dos dois arrays
[array_pop]($array) = exclui a última posição do array

*/

$nomes = array("Marcos", "Renata", "Maria", "José");

if(is_array($nomes)):
	echo "é um array";
else:
	echo "não é um array";
endif;
echo "<hr>";

if(in_array("Marcos", $nomes)):
	echo "Existe no array";
else:
	echo "Não existe";
endif;
echo "<hr>";

$familia = array("primo"=>"Marcos", "prima"=>"Renata", "Mae"=>"Maria", "filho"=>"José");

$keys = array_keys($familia);
print_r($keys);
echo "<hr>";

$values = array_values($familia);
print_r($values);
echo "<hr>";

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");
$veiculos = array_merge($carros, $motos);

print_r($veiculos);
echo "<hr>";


