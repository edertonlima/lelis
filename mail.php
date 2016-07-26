<?php

	$email = $_GET['email'];

	$email_remetente = "falecom@clinicamypets.com.br";
	$para = $email_remetente;
	$para2 = 'edertton@gmail.com';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: PMSI <$email_remetente>\n"; // remetente
	$headers .= "Return-Path: PMSI <$email_remetente>\n"; // return-path
	$headers .= "Reply-To: <$nome> <$email>\n"; // Endereço (devidamente validado) que o seu usuário informou no contato

	$conteudo = '
	<h2>Olá, você recebeu um novo cadastro de e-mail:</h2>';

	$conteudo .= '<p>';
	$conteudo .= '<br><strong>E-mail:</strong> '.$email;
	$conteudo .= '</p>';
	if(mail($para2, "Cadastro de E-mail", $conteudo, $headers, "-f$email_remetente")){
		echo(json_encode("Cadastro realizado com sucesso! Obrigado."));
	}else{
		echo(json_encode("Desculpe, não foi possível fazer o seu cadastro. Por favor, tente novamente mais tarde."));
	}
	//if(mail($para2, "Cadastro de E-mail", $conteudo, $headers, "-f$email_remetente")){ }

?>