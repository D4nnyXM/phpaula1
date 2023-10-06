<?php
// CONSTANTES 
DEFINE ('NOME', 'Marcos');
DEFINE ('IDADE', 35);

echo 'Constante '.NOME.' Idade:'.IDADE;

echo "<hr> URI Solicitada $_SERVER[REQUEST_URI] <hr>";
echo "IP Remoto $_SERVER[REMOTE_ADDR] <hr>";

$x = 10;   
echo ++$x; echo " $x <br>"; //incremento 
$x = 10;  
echo $x++; echo " $x <br>"; //incremento 
$x = 10;  
echo --$x; echo " $x <br>"; // decremento
$x = 10;  
echo $x--; echo " $x <br>"; // decremento

?>