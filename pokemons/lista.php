<?php
echo 'conectar ao banco de dados procedural <br>';
$host = "localhost";
$user = "root";
$senha = "123456";
$dbname = "pokemon";
//conecta ao banco de dados
$con = mysqli_connect($host, $user, $senha, $dbname) or die("Não foi possil conectar-se com o banco de dados");

$consulta = "SELECT * FROM pokedex"; // SQL de consulta
$resultado = mysqli_query($con, $consulta); // consulta no BD
$resultado2 = mysqli_query($con, $consulta); // consulta no BD

$xyz = mysqli_fetch_array($resultado2, MYSQLI_BOTH); // Transformar o resultado em array
echo "pokemon: $xyz[nome] <br>"; //imprimir a primeira posicao do array

// while para percorrer todas as posicoes do array
while($row = mysqli_fetch_array($resultado, MYSQLI_BOTH)){ //
	echo "ID: $row[idPokemon] Nome: $row[nome] Tipo: $row[tipo] <br>";
}

?>