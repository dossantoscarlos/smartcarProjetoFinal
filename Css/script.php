<link rel="stylesheet" href='Css/style.css'>
<link rel="stylesheet" href="img/slide/style.css">
<link rel="stylesheet" href="img/menu-scroll-fixo-jquery/menu.css">
<link rel="stylesheet" type="text/css" href="img/pag.carros/style.css"/>
<link rel="stylesheet" type="text/css" href="img/pag.carros/common.css"/>
<link rel="stylesheet" type="text/css" href="img/pag.carros/normalize.css"/>
<script type="text/javascript" src="img/pag.carros/js/modernizr.custom.79639.js"></script> 
<script src="img/menu-scroll-fixo-jquery/jquery-1.11.1.min.js"></script>
<script src="javascript/menuLinks.js"></script>
<link rel="stylesheet" href="img/slide/style.css">
<link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'/>
<?php if(isset($_GET['p'])){
	switch($_GET['p']){
		case 'modelo':
    ?>	   
<link rel="stylesheet" type="text/css" href='css/Modelo.css'/>-->
<?php  
	break;
	default:	
	?>
	<link rel="stylesheet" type="text/css" href='css/styleLogin.css'/>
<?php
	break; 
	}
}
?>
<script src="img/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="img/slide/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/slaide.js"></script>
<script src='javascript/FalaConosco.js' type="text/javascript"></script>
<script src='javascript/validaCampoCadastro.js' type="text/javascript"></script>
<link rel="stylesheet" href="Css/span_message.css" media="all"/>
<link rel="stylesheet" href="Css/style_Exibe_email_logado.css" media="all"/>
<link rel="stylesheet" href="Css/buttonRedefineSenha.css" media="all"/>
<script src="javascript/buttonRedefineSenha.js" type="text/javascript" ></script>
<?php  require 'Css/styleMascote.php'; ?> 