<?php
include 'conecta.php';

$codLeitor = $_POST['codLeitor'];
$nome_novo = $_POST['nome_novo'];
$senha_nova = $_POST['senha_nova'];
$email_novo = $_POST['email_novo'];
$condição_nova = $_POST['condição_nova'];
$mesNasc_novo = $_POST['mesNasc_novo'];
$diaNasc_novo = $_POST['diaNasc_novo'];
$anoNasc_novo = $_POST['anoNasc_novo'];
$mesCad_novo = $_POST['mesCad_novo'];
$diaCad_novo = $_POST['diaCad_novo'];
$anoCad_novo = $_POST['anoCad_novo'];
$premium_novo = $_POST['premium_novo'];




$sql = "UPDATE leitores SET nome = '$nome_novo', senha = '$senha_nova', email ='$email_novo', condição ='$condição_nova', mesNasc = '$mesNasc_novo', diaNasc = '$diaNasc_novo', anoNasc = '$anoNasc_novo', mesCad = '$mesCad_novo', diaCad = '$diaCad_novo', anoCad = '$anoCad_novo', Premium = '$premium_novo' WHERE codLeitor = '$codLeitor'";

$resultado = $conexao->prepare($sql);

$resultado->execute()
?>

<script>
	alert("DADOS ATUALIZADOS COM SUCESSO!");
	location.href = "adm.php";
</script>