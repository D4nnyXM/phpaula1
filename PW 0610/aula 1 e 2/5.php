<?php
function pinga($dinheiro, $idade){
	if ($idade >= 18){ 
		
		if ($dinheiro >=10 ){
			echo "Bora beber litrao";
		}else{
			echo "maior, mas quebrado";
		}

	} else {
		echo "menor de idade, nao pode beber";
	}
}
pinga(10, 20);
echo "<hr>";

function pinga2($dinheiro, $idade){
	if ($idade >= 18){ 
		if ($dinheiro >=10 ){
			$resposta = "Bora beber litrao";
		}else{
			$resposta =  "maior, mas quebrado";
		}
	} else{
		$resposta = "menor de idade, nao pode beber";
	}
	return $resposta;
}

pinga2(10, 20);// nao funciona para funcao com retorno
echo "<hr>";
$oi = pinga2(100,15);
echo "$oi";
?>