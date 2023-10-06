<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>

<form action="ler_dados.php" method="post">
	<label for="nome">Nome:</label>
	<input type="text" name="nome" id="nome"><br>
	<label for="idade">Idade:</label>
	<input type="number" name="idade" id="idade"><br>

	<input type="radio" id="html" name="language" value="HTML">HTML<br>
   	<input type="radio" id="css" name="language" value="CSS">CSS<br>
  	<input type="radio" id="javascript" name="language" value="JavaScript"> JavaScript <br>
  	<!-- checkbox tipo 1 -->
 <input type="checkbox" name="ve1" value="Bike"> Bike
 <br>
 <input type="checkbox" name="ve2" value="Carro"> Carro
 <br>
 <input type="checkbox" name="ve3" value="Barco"> Barco
  
  	<!-- checkbox tipo 2 -->
<input type="checkbox" name="fruta[]" value="maca"> Maca <br>
<input type="checkbox" name="fruta[]" value="abacaxi">abacaxi <br>
<input type="checkbox" name="fruta[]" value="melancia">melancia<br>
<input type="checkbox" name="fruta[]" value="goiaba">goiaba <br>
<input type="checkbox" name="fruta[]" value="laranja">laranja <br>
<input type="checkbox" name="fruta[]" value="pera"> pera <br>
<input type="checkbox" name="fruta[]" value="melao">melao<br>

    <!-- Data -->
	<input type="submit" value="Salvar">
</form>

</body>
</html>