<?php
//Arrays numéricos
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo"<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Marcos", "Renata", "Carlos", "Bia"];
print_r($clientes);
echo "<hr>";

//Count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach
foreach($carros as $valor) {
	echo $valor. "<br>";
}

//Arrays associativos
$pessoa = array("nome"=> "Marcos", "idade"=> 20, "altura"=> 1.80);
$pessoa["cidade"]="Olinda";

foreach($pessoa as $indice => $valor){
	echo $indice.":".$valor."<br>";
}
echo "<hr>";

//Arrays multidimensionais
$times = array("cariocas"=> array("campeao"=>"Flamengo","vice"=>"vasco","terceiro"=>"botafogo"),
			"paulistas"=> array("campeao"=>"Corithians","segundo"=>"Palmeiras","terceiro"=>"São Paulo"),
			"pernambucanos"=> array("campeao"=>"Santa Cruz","vice"=>"Sport","terceiro"=>"Nautico")
		);

echo $times["cariocas"][1];
echo "<br>";

echo "<hr>";
echo "TIMES <br>";

echo "CARIOCAS <br>";
foreach($times["cariocas"] as $indice=>$valor) {
	echo $indice.":".$valor."<br>";
}
echo "<hr>";

echo "PAULISTAS <br>";
foreach($times["paulistas"] as $indice=>$valor) {
	echo $indice.":".$valor."<br>";
}
echo "<hr>";

echo "PERNAMBUCANOS <br>";
foreach($times["pernambucanos"] as $indice=>$valor) {
	echo $indice.":".$valor."<br>";
}