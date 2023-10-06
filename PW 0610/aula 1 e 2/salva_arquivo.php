<?php
// Ler informações do arquivo

//obtendo arquivo
$arquivo = $_FILES['myfile'];

var_dump($arquivo);

// obtendo o tipo do arquivo
$tipo = explode("/", $arquivo['type']);

echo " Esse arquivo é do tipo $tipo[1]";

$nome_novo = 'foto';
$destino = 'img/'.$nome_novo.'.'.$tipo[1];

echo "<br> Destino $destino <br> ";

move_uploaded_file($arquivo['tmp_name'], $destino);


?>
