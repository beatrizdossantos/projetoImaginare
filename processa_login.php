<?php
	session_start();
	require("conecta.php");

	$email = !empty($_REQUEST['email'])?$_REQUEST['email']:'';
	$senha = !empty($_REQUEST['senha'])?$_REQUEST['senha']:'';
//-----------------------------------------------------------------------------------------------------------------------------------------//
	if($email&&$senha) {
 		$consulta = "SELECT * FROM administradores WHERE email  = '$email' AND senha = '$senha'";
 		$resultado = $conexao->query($consulta);
 		$registros = $resultado->num_rows;
 		$resultado_usuario = mysqli_fetch_assoc($resultado);

 		if ($registros<>0) {
 			$_SESSION['codAdmin'] = $resultado_usuario['codAdmin'];
 			$_SESSION['nome'] = $resultado_usuario['nome'];
 			$_SESSION['email'] = $resultado_usuario['email'];

 			header('location:adm.php');
 		}
 		else{
 			if($email&&$senha) {
 		$consulta = "SELECT * FROM leitores WHERE email  = '$email' AND senha = '$senha'";
 		$resultado = $conexao->query($consulta);
 		$registros = $resultado->num_rows;
 		$resultado_usuario = mysqli_fetch_assoc($resultado);

	 		if ($registros<>0) {
	 			$_SESSION['codLeitor'] = $resultado_usuario['codLeitor'];
	 			$_SESSION['nomeLeitor'] = $resultado_usuario['nome'];
	 			$_SESSION['emailLeitor'] = $resultado_usuario['email'];

	 			header('location:index.php');
	 		}
	 		else{
	 			header('location: login.html');
	 		}
 			}	
 		}
 	}
 	else{
 			header('location: login.html');
 		}


 	
 	

?>