<?php
	
	session_start();
		unset(

			$_SESSION['codLeitor'],
			$_SESSION['nomeLeitor'],
			$_SESSION['emailLeitor']
		);

		header('Location:login.html');
?>