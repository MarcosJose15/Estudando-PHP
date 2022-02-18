<?php
/***************Escalares***************/
//string
$nome = "Renata";
var_dump($nome);
if(is_string($nome)):
 	echo "É uma string";
else:
 	echo "Não é uma string";
endif;
echo "<hr>";

//int
$idade = 20;
var_dump($idade);
if(is_int($idade)):
 	echo "É um inteiro";
else:
 	echo "Não é um inteiro";
endif;
echo "<hr>";

//Float
$periodo = 2022.1;
var_dump($periodo);
if(is_float($periodo)):
 	echo "É um float";
else:
 	echo "Não é um float";
endif;
echo "<hr>";

//Boolean
$resposta = true;
var_dump($resposta);
if(is_bool($resposta)):
 	echo "É um booleano";
else:
 	echo "Não é um booleano";
endif;
echo "<hr>";

/************Composto************/
//array
$carros = array("Gol","Uno","Hilux","Camaro",20,19.3, false);
var_dump($carros);
if(is_array($carros)):
	echo "É um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

//object
class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Marcos");
var_dump($cliente);
if(is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";

/************Especiais************/
//Null
$cidade = NULL;
var_dump($cidade);

//Resource
