<?php

if (isset($_SESSION['use'])){
@$Logoff=$_GET['lkp'];
?>
	<div id ="cadastrar">
    	<a href="index.php?lkp=logoff" title="Logoff">Logoff &laquo;</a>
	</div>

<?php
	
	if($Logoff==="logoff"){
		$Home="index.php";
		unset($_SESSION['use']);
		header("Location: ".$Home);	
	}
}else{
	
		
?>
	<div id ="cadastrar"><a href="index.php?p=cadastro"title="cadastre-se em nosso sistema!!">Cadastre-se &laquo;</a></div>	  
<?php
}
?>