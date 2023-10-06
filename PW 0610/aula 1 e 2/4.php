<?php
$vetor = array('abobora','melao','goiaba');

var_dump($vetor);
echo "<hr>";
print_r($vetor);
echo "<hr>";

echo "$vetor[0] <br>";
echo "$vetor[1] <br>";
echo "$vetor[2] <br> <hr>";

foreach ($vetor as $fruta) {
  echo "$fruta <br>";
}

for ($k=0; $k <count($vetor); $k++){
	echo "Fruta $k é: $vetor[$k] <br />";
}
?>