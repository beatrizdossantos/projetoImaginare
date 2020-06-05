<?php

	if (isset($_POST(['email']) && !empty($_POST(['email']) {
		$nome = addslashes($_POST(['name']))
		$email = addslashes($_POST(['email']))
		$assunto = addslashes($_POST(['subject']))
		$mensagem = addslashes($_POST(['message']))

		$to = "projeto.imaginare@gmail.com";
		$body = "Nome: ".$nome. "/n"
				"email: ".$email. "/n"
				"assunto: ".$assunto. "/n"
				"mensagem: ".$mensagem. "/n"


	}

?>