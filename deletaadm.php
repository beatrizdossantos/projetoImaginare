<?php
	include 'conecta.php';

	$codAdmin = $_GET['codAdmin'];

	$sql = "DELETE FROM administradores WHERE codAdmin = '$codAdmin'";
	$resultado = $conexao->prepare($sql);
	$resultado -> execute();

	mysqli_close($conexao);


?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "adm.php";
</script>