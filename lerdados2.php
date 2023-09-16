<?php
//Ler informaçoes do arquivo

$arquivo = $_FILES['myfile'];
var_dump($arquivo);

//obtendo o tipo de arquivo 
$tipo = explode("/", $arquivo['type']);

echo " Esse arquivo e do tipo $tipo[1]";

$nome_novo = 'foto';
$destino = 'img/'.$nome_novo.'.'.$tipo[1];












?>