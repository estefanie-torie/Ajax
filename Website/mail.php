<?php 	
	$name = trim($_POST['name']);
	
	$email = trim($_POST['email']);

	$subject = trim($_POST['subject']);
			
	if(function_exists('stripslashes')) {
		$message = stripslashes(trim($_POST['message']));
	} else {
		$message = trim($_POST['message']);
	}
		
	$emailTo = 'comercial@graficaajax.com.br ';
	$subject = 'Formulario enviado do site graficaajax.com.br '.$name;
	$sendCopy = trim($_POST['sendCopy']);
	$body = "Name: $name \n\nEmail: $email \n\nAssunto: $subject \n\nMensagem: $message";
	$headers = 'From: Formulario Ajax <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
	
		
	try{
		mail($emailTo, $subject, $body, $headers);
		echo "<script>location.href='contato2.html'</script>";	
	}catch (Exception $e){
		echo "<script>location.href='contato3.html'</script>" ;
	}
	
	
	
	
	
?>