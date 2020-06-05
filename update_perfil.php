<?php
include 'conecta.php';

$codLeitor = $_POST['codLeitor'];
$nome_novo = $_POST['nome_novo'];
$senha_nova = $_POST['senha_nova'];
$mesNasc_novo = $_POST['mesNasc_novo'];
$diaNasc_novo = $_POST['diaNasc_novo'];
$anoNasc_novo = $_POST['anoNasc_novo'];
$email_novo = $_POST['email_novo'];
$condicao_nova = $_POST['condicao_nova'];

$sql = "UPDATE leitores SET nome = '$nome_novo', senha = '$senha_nova', mesNasc = '$mesNasc_novo', diaNasc = '$diaNasc_novo', anoNasc = '$anoNasc_novo', email ='$email_novo', condição = '$condicao_nova'  WHERE codLeitor = '$codLeitor'";

$resultado = $conexao->prepare($sql);

$resultado->execute()
?>

<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "perfil.php";
</script>
