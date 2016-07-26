<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="" type="image/x-icon">
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

<!-- Scrolling Nav JavaScript -->
<script src="assets/js/jquery.easing.min.js"></script>
<script type="text/javascript">
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	jQuery(function() {
	    jQuery('.scroll').bind('click', function(event) {
	        var anchor = jQuery(this);
	        var position = (jQuery(anchor.attr('href')).offset().top)-110;
	        jQuery('html, body').stop().animate({
	            scrollTop: position
	        }, 1500, 'easeInOutExpo');
	        event.preventDefault();
	    });
	});
</script>


<script type="text/javascript">
	jQuery.noConflict();
</script>

<script type="text/javascript">
	
	var position = '';
	function menuFixed(position){		
		if(position > 100){
			jQuery('.top-container').addClass('menu-fixed');
		}else{
			jQuery('.top-container').removeClass('menu-fixed');
		}
	}

	jQuery(document).ready(function(){
		//var height = jQuery(window).height();
		//jQuery('.header').height(height);

		/* AJUSTE DE ALTURAS */
		jQuery('.vantagens .img').height(jQuery('.vantagens .conteudo').height());
		jQuery('.inventario .img').height(jQuery('.inventario .conteudo').height());
		jQuery('.desenvolvimento').height(jQuery('.custo').height());

    	position = jQuery(window).scrollTop();
    	menuFixed(position);

	    jQuery(window).scroll(function(){
	    	position = jQuery(window).scrollTop();
	    	menuFixed(position);
	    });

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
			jQuery(this).html('Enviando').prop( "disabled", true );
			jQuery(this).parent('form').find('.msg-form').html('').hide();
			var email = jQuery('#email').val();

			if(email!=''){
				jQuery.getJSON("includes/mail.php", { email: email }, function(result){		
					jQuery(this).parent('form').find('.msg-form').html(result).show();
					jQuery(this).parent('form').trigger("reset");
					jQuery(this).html('Enviar').prop( "disabled", false );
				});
			}else{
				jQuery(this).parent('form').find('.msg-form').html('Por favor, digite um e-mail válido.').show();
				jQuery(this).html('Enviar').prop( "disabled", false );
			}
		});

	});
</script>

</head>
<body>