<?php
// Obtendo dados do formulario
// $_GET[] 
// $_POST[]
// $_REQUEST[] obtem independente da forma

//$nome = $_GET['nome'];
//$idade = $_GET['idade'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$ling = $_POST['language'];
//checkbox 1
if (isset($_POST['ve1'])){
	$ve1 = $_POST['ve1'];
}else{
	$ve1 = '';
}

if (isset($_POST['ve2'])){
	$ve2 = $_POST['ve2'];
}else{
	$ve2 = '';
}
if (isset($_POST['ve3'])){
	$ve3 = $_POST['ve3'];
}else{
	$ve3 = '';
}

echo "Ve1:$ve1 Ve2:$ve2 Ve3: $ve3  <hr>";

// Parte do checkbox2

if(isset($_POST['fruta'])){
	$frutas = $_POST['fruta'];
	var_dump($frutas);
}
echo "<br>";
for ($z=0; $z < count($frutas); $z++){
	echo "Fruta: $frutas[$z] <br>";
}


echo "Seu nome é: $nome e vc tem $idade anos e voce adora $ling <hr>";

if ($idade >= 18 ){
	echo "Pode beber";
}else{
	echo "Nao pode beber ainda";
}
?>