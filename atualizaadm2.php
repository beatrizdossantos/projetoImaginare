<?php
include 'conecta.php';

$codAdmin = $_POST['codAdmin'];
$nome_novo = $_POST['nome_novo'];
$senha_nova = $_POST['senha_nova'];
$mesNasc_novo = $_POST['mesNasc_novo'];
$diaNasc_novo = $_POST['diaNasc_novo'];
$anoNasc_novo = $_POST['anoNasc_novo'];
$email_novo = $_POST['email_novo'];


$sql = "UPDATE administradores SET nome = '$nome_novo', senha = '$senha_nova', mesNasc = '$mesNasc_novo', diaNasc = '$diaNasc_novo', anoNasc = '$anoNasc_novo', email ='$email_novo'  WHERE codAdmin = '$codAdmin'";

$resultado = $conexao->prepare($sql);

$resultado->execute()
?>

<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "perfilAdm.php";
</script>
