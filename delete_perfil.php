<?php
	include 'conecta.php';

	$codLeitor = $_GET['codLeitor'];

	$sql = "DELETE FROM leitores WHERE codLeitor = '$codLeitor'";
	$resultado = $conexao->prepare($sql);
	$resultado -> execute();

	mysqli_close($conexao);


?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "sair.php";
</script>