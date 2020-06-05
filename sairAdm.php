<?php
	
	session_start();
		unset(

			$_SESSION['codAdmin'],
			$_SESSION['nome'],
			$_SESSION['email']
		);

		header('Location:login.html');
?>