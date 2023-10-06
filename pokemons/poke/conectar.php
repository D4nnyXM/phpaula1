<?php
$host = "localhost";
$user = "root";
$senha = "123456";
$dbname = "pokemon";
//conecta ao banco de dados
$con = mysqli_connect($host, $user, $senha, $dbname) or die("Não foi possil conectar-se com o banco de dados");
?>