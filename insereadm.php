<?php
include 'conecta.php';

$senha = $_POST['senha'];
$mesNasc = $_POST['mesNasc'];
$diaNasc = $_POST['diaNasc'];
$anoNasc = $_POST['anoNasc'];
$email = $_POST['email'];
$nome = $_POST['nome'];


$consulta = $conexao->prepare("INSERT INTO ADMINISTRADORES (senha,mesNasc,diaNasc,anoNasc,email, nome) VALUES ('$senha','$mesNasc','$diaNasc','$anoNasc','$email', '$nome')");
$consulta->execute();

?>

<script>
	alert("DADOS CADASTRADOS COM SUCESSO");
	location.href = "adm.php";
</script>