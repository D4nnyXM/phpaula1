<?php
$opcao = 'stop';
switch ($opcao) {
	case 'start':
		echo "opcao Start";
		break;
	case 'stop':
		echo "opcao Stop";
		break;
	case 'restart':
		echo "opcao Restart";
		break;
	
	default:
		echo "Opcao nao encontrada";
		break;
}
?>