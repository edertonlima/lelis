<?php

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$mensagem = $_GET['mensagem'];

	$email_remetente = "eloamartarello@gmail.com";
	$para = $email_remetente;
	$para2 = 'edertton@gmail.com';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: Lelis <$email_remetente>\n"; // remetente
	$headers .= "Return-Path: Lelis <$email_remetente>\n"; // return-path
	$headers .= "Reply-To: <$nome> <$email>\n"; // Endereço (devidamente validado) que o seu usuário informou no contato

	$conteudo = '
	<h2>Olá, você recebeu uma nova mensagem de contato:</h2>';

	$conteudo .= '<p>';
	$conteudo .= '<br><strong>Nome:</strong> '.$nome;
	$conteudo .= '<br><strong>E-mail:</strong> '.$email;
	$conteudo .= '<br><strong>Telefone:</strong> '.$telefone;
	$conteudo .= '<br><strong>Mensagem:</strong> '.$mensagem;
	$conteudo .= '</p>';
	if(mail($para, "Contato, Site", $conteudo, $headers, "-f$email_remetente")){
		echo(json_encode("Mensagem enviada com sucesso! Obrigado."));
	}else{
		echo(json_encode("Desculpe, não foi possível enviar a sua mensagem. Por favor, tente novamente mais tarde."));
	}
	if(mail($para2, "Contato, Site", $conteudo, $headers, "-f$email_remetente")){ }

?>