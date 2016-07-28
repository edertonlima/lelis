<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="" />
<meta name="language" content="pt-br" />
<meta name="title" content="" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->

<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">
	jQuery.noConflict();
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){

	    /* MENU */
	    jQuery('.menu-mobile').click(function(){
	    	jQuery(this).toggleClass('active');
	    	jQuery('.menu').toggleClass('active');
	    });
	    jQuery('.menu a').click(function(){
	    	jQuery('.menu-mobile').removeClass('active');
	    	jQuery('.menu').removeClass('active');
	    });


		// envio do formulário
		jQuery(".enviar").click(function(){
			jQuery('.enviar').html('Enviando').prop( "disabled", true );
			jQuery('.msg-form').html('').hide();
			var nome = jQuery('#nome').val();
			var email = jQuery('#email').val();
			var telefone = jQuery('#telefone').val();
			var mensagem = jQuery('#mensagem').val();

			if(email!=''){
				jQuery.getJSON("mail.php", { nome: nome, email: email, telefone: telefone, mensagem: mensagem }, function(result){		
					jQuery('.msg-form').html(result).show();
					jQuery('form').trigger("reset");
					jQuery('.enviar').html('Enviar').prop( "disabled", false );
				});
			}else{
				jQuery('.msg-form').html('Por favor, digite um e-mail válido.').show();
				jQuery('.enviar').html('Enviar').prop( "disabled", false );
			}
		});

	});
</script>

</head>
<body>