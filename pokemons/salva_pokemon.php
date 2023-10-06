<?php
$nome = $_GET['nome'];
$tipo = $_GET['tipo'];

$sql = "INSERT INTO pokedex (`nome`, `tipo`) values ('$nome', '$tipo')";
$host = "localhost";
$user = "root";
$senha = "123456";
$dbname = "pokemon";
//conecta ao banco de dados
$con = mysqli_connect($host, $user, $senha, $dbname) or die("Não foi possil conectar-se com o banco de dados");
$res = mysqli_query($con, $sql) or die ("Erro ao inserir o pkemon");
echo "pokemon na pokedesk";
?>