<?php
include('conectar.php');
if (!empty($_REQUEST['action'])) { // existe action

	if ($_REQUEST['action'] == 'excluir'){ // acao de excluir
		$idPokemon = $_REQUEST['idPokemon'];
		$sql_delete = "DELETE FROM pokedex WHERE idPokemon = '$idPokemon'";
		if (mysqli_query($con, $sql_delete)){
			echo "<b>excluido com sucesso </b><br>";
		}else{
			echo "<b> erro ao excluir</b> <br>";
		}
	}// fim do excluir

	if ($_REQUEST['action'] == 'novo'){ // acao salvar bicho
		$nome = $_REQUEST['nome'];
		$tipo = $_REQUEST['tipo'];
		$sql_insert = "INSERT INTO pokedex (`nome`, `tipo`) values ('$nome', '$tipo')";
		if (mysqli_query($con, $sql_insert)){
			echo "<b> PoKemon salvo na Pokedex</b> <br>";
		}else{
			echo "<b> Erro ao salvar o pokemon</b> <br>";
		}
	}// fim do salvamento do bicho

	if ($_REQUEST['action'] == 'editar'){ // aca
		$idPokemon = $_REQUEST['idPokemon'];
		$sql_e="SELECT * FROM pokedex WHERE idPokemon = '$idPokemon'";
		$row = mysqli_query($con, $sql_e);
		$r1 = mysqli_fetch_array($row, MYSQLI_BOTH);

		echo "<form >";
		echo "ID <input type='text' value='$r1[idPokemon]' name='idPokemon'>";
		echo "Nome <input type='text' value='$r1[nome]' name='nome'>";
		echo "Tipo <input type='text' value='$r1[tipo]' name='tipo'>";
		echo "<input type='submit' value='Editar'>";
		echo "</form>";
	}// fim editar pokemon




}// fim da acao

$consulta = "SELECT * FROM pokedex"; // SQL de consulta
$resultado = mysqli_query($con, $consulta); // consulta no BD
?>
<a href="poke_new.php">NOVO POKEMON</a>
<table border="1">
	<thead>
	<tr>
	<td>ID</td><td>E</td><td>X</td><td>Nome</td><td>Tipo</td>
	</tr>
	</thead>
<?php
while($row = mysqli_fetch_array($resultado, MYSQLI_BOTH)){ //
	$link="<a href='poke_list.php?action=excluir&idPokemon=$row[idPokemon]'>Excluir</a>";
	$link_editar="<a href='poke_list.php?action=editar&idPokemon=$row[idPokemon]'>Editar</a>";

	echo "<tr><td>$row[idPokemon]</td>";
	echo "<td>$link_editar</td>";
	echo "<td>$link</td> ";
	echo "<td>$row[nome]</td>";
	echo "<td>$row[tipo]</td></tr>";
}
?>
</table>