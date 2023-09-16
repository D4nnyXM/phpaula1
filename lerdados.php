<?php
//obetendo dados do formulario
//$_GET[]
//$_POST[]
//$_REQUEST obtem independete da forma

//$nome = $_GET['nome'];
//$idade = $_GET['idade'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$ling = $_POST['language'];
//checkbox
if (isset($_POST['vol1'])){
    $vol1 =$_POST['vol1'];
}else{
    $vol1 = '';
}
//
if (isset($_POST['vol2'])){
    $vol2 =$_POST['vol2'];
} else {
    $vol2 = '';
}
//
if (isset($_POST['vol3'])){
    $vol3 =$_POST['vol3'];
} else {
    $vol3 = '';
}
//



//echo "Seu nome é: $nome e voce tem $idade anos e voce  adora $ling <hr>";

if($idade >= 18){
    echo "  Pode beber e ganhar uma cirrose ;)";
}else{
    echo " Nao pode beber ainda maneh :/";
}
echo "vol1:$vol1, vol2:$vol2, vol3:$vol3 <hr>";


if(isset($_POST['fruta'])){
    $frutas = $_POST['fruta']; 

}
for ($z=0; $z < count($frutas); $z++){
    echo "Fruta: $frutas[$z]<hr>";
}




?>