<?php
	header('Content-Type: text/html; charset=utf-8');
	$name 	= 	$_POST['name'];//pega os dados que foi digitado no ID name.
	$email 	= 	$_POST['email'];//pega os dados que foi digitado no Id email.
	$message= 	$_POST['message'];//pega os dados que foi digitado no Id message

	$headers	=	"From: $email\r\n";
	$headers	=	"Reply-To: $email\r\n";
	/*Abaixo será os dados que serão enviados parao email*/
	$corpo	=	"Formulário enviado\n";
	$corpo	=	"Nome: " . $name . "\n";
	$corpo	=	"Email: " . $email . "\n";
	$corpo	=	"Comentários: " . $message . "\n";

	$email_to	=	'junioralves.webdeveloper@gmail.com';

	$status	=	mail($email_to, $corpo, $headers); //enviando o email.

	if($status) {
		echo "<script> alert('Formulário enviado com sucesso.'); </script>";
	}
	else {
		echo "<script> alert('Falha ao enviar Formulário.'); </script>";
	}
	echo "<script> window.location.href = 'http://junioralves.hol.es/'; </script>";
?>