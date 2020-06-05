<?php
include 'conecta.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$condicao = $_POST['condicao'];
$diaCad = Date("d");
$mesCad = Date("m");
$anoCad = Date("y");
$premium == 0;



$consultaNome = "SELECT nome FROM leitores WHERE nome LIKE '$nome'";
$resultado = $conexao->query($consultaNome);
$registros = $resultado->num_rows;

$resultado_consulta = mysqli_fetch_assoc($resultado);

	if ($registros>0){ ?>
		<script>
			alert("Esse nome de usuário não está disponível!");
			location.href = "cadastro.php";
		</script> <?php  
	} 
	else{
		$consulta = $conexao->prepare("INSERT INTO leitores (nome,email,senha,condição,diaCad,mesCad,anoCad, Premium) VALUES ('$nome','$email','$senha','$condicao','$diaCad','$mesCad','$anoCad','$premium')");

        $consulta->execute();
	}
?>

<script>
	alert("CADASTRADO COM SUCESSO!");
	location.href = "login.html";
</script>