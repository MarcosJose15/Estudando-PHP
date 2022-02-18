<?php
//Constantes
define("NOME", "Marcos José");
define("IDADE", 20);
define("ALTURA", 1.80);
define("CASADO", false);

define("TIMES",['vasco', 'flamengo','santos']);

echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';
echo "<hr>";
echo TIMES[0];
var_dump(TIMES);

function exibeNome(){
	echo NOME;
}
exibeNome();