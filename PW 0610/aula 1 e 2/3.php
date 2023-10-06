<?php
//tipo boleando
$exibir_nome = TRUE;

if ($exibir_nome){ // se for verdadeiro
	echo 'Variavel TRUE';
}

if (!$exibir_nome){ // se não for verdadeiro
	echo 'Variavel FALSE';
}

$humidade = 90;
$chover = ($humidade >= 90);

if ($chover){
	echo "vai chover";
}else{
	echo "Nao vai chover";
}