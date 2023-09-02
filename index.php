<?php
//echo "dentro do php";
//echo "<p> Paragrafo </p>";
//echo "<h1> Header 1 <h/>";
//comentario
//para pula linha <br>
//print 'dentro do php tbm';

//variaveis

$a = 1;
$b = 2;
$c = 3;
echo "<br>";
$nomeCliente = 'Joao';
echo "<br>";
$Nomecliente = "Antonio";
echo "<br>";
// questao das "" ele faz o que esta dentro
echo "a = $a b = $b <br>";
echo "<br>";
// '' simples fica tudo texto corrido
echo 'a = $a b = $b <br>';
echo "<br>";
// concatena => . faz o efeito das ""
echo 'a ='.$a.' b = '.$b;

// para pular linha

echo "<br>";

echo "$nomeCliente <br> $Nomecliente";

echo "<br>";

$j = 7;
$x = 10;
$y = 2;
echo $x + $y;
echo "<br> j $j <br>";

$g = "5";
$h = "4";
$i = $g + $h;

echo "<br> Valor de i $i<br>";

// tipo boleando 

$exibir_nome = True;

if($exibir_nome){
    echo 'Variavel True';

}
if (!$exibir_nome){
    echo 'Variavel false';

}
$humidade =  90;
$chover = ($humidade >= 90);

if($chover){
    echo "Vai chover";
}else{
    echo "Nao Vai chover";
}

//vetor

$vetor = array('abobora','melao','goiaba');
var_dump($vetor);

echo"<hr>"; //para fazer uma linha

print_r($vetor);
//para mostrar o que esta escrito
echo "$vetor[0]<br>";
echo "$vetor[1]<br>";
echo "$vetor[2]<br>";
// para mostrar tudo

foreach($vetor as $fruta){
    echo "$fruta <br>";
 }
 for ($k=0; $k<count($vetor); $k++){
    echo "Fruta $k é: $vetor[$k] <br />";
 }
 echo "<br>";
 
//funcao
function pinga($dinheiro,$idade){
    if($idade >=18){
        if($dinheiro >= 10){
           
            echo "Bora beber litrao";
        }else{
            echo "maior, mas quebrado";
        }        
    }
        else{
            echo "menor de idade, nao pode beber";
        }
    }

pinga(10,20);
echo "<hr>";

echo "<br>";
function pinga2($dinheiro,$idade){
    if ($idade >= 18){
        if ($dinheiro >=10){
            $resposta = "maior, mas quebrado";

        }
    }else{
        $resposta = "menor de idade, nao pode beber";

    }
    return $resposta;
}
pinga2(10,20); // nao funciona para funcao com retorno
echo "<hr>";
$oi = pinga2(100,15);
echo "$oi";

echo "<br>";

// constantes

echo "<br>";
define ('nome', 'Marcos');
define ('idade', 35);
echo 'Contante  '.nome.' Idade: '.idade;
echo "<br>";

echo "<br> URI Solicitada $_SERVER[REQUEST_URI] ";
echo "IP Remoto $_SERVER[REMOTE_ADDR] <br>";
echo "<br>";

//incremento 

$x = 10;
echo ++$x; echo " $x <br>";

$x = 10;
echo $x++; echo " $x <br>";

//decremento

$x = 10;
echo --$x; echo " $x <br>";

$x = 10;
echo $x--; echo " $x <br>";

// ou isso ou aquilo
$a = true;
$b = false;
echo "<br>";
if ($a and $b){
    echo "Ambos verdadeiros";
}
echo "<br>";

if ($a && $b){
    echo "Ambos verdadeiros";
}
echo "<br>";
if ($a or $b){
    echo "A ou B verdadeiro";
}
echo "<br>";
if ($a || $b){
    echo "A ou B verdadeiro";
}
echo "<br>";

// exemplo de switch case

$opcao = 'stop';
switch ($opcao){
    case 'start':
        echo "opcao Start";
        break;
    case 'stop':
        echo "opcao Stop";
        break; 
    case 'restart':
        echo "opcao Restart";
        break;   
        
    default;
        echo "opcao nao encontrada";
        break;
}

//






?>