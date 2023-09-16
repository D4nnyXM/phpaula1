<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>
<body>
    <form action="lerdados.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br></input>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade"><br></input>
        
        <input type="radio" id="html" name="language" value="HTML">HTML<br>
        <input type="radio" id="css" name="language" value="CSS">CSS<br>
        <input type="radio" id="javascript" name="language" value="JAVASCRIPT">JAVASCRIPT<br>
    <!-- -->
       <!--  CHECKBOX TIPO 1 -->
        
        <input type="checkbox" name="vol1" value="Bike">Bike <br>
        <input type="checkbox" name="vol2" value="Carro">Carro <br>
        <input type="checkbox" name="vol3" value="Barco">Barco <br>

    <!-- CHECKBOX 2  -->

    <input type="checkbox" name="fruta[]" value="maca">MACA <br>
    <input type="checkbox" name="fruta[]" value="banana">Banana <br>
    <input type="checkbox" name="fruta[]" value="coco">Coco <br>
    <input type="checkbox" name="fruta[]" value="manga">Manga <br>
    <input type="checkbox" name="fruta[]" value="melao">Melao <br>
    <input type="checkbox" name="fruta[]" value="limao">Limao <br>
    <input type="checkbox" name="fruta[]" value="melancia">Melancia<br>
    <input type="checkbox" name="fruta[]" value="abacaxi">Abacaxi<br>
    


    <input type="submit" value= "salvar">


        <label></label>

    </form>

    

    
</body>
</html>