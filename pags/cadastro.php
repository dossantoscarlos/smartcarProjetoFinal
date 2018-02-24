<style>
	#Cadastro span{
			color:#FF0000;
			margin-left:10px;
		
		}

</style>
<?php
//logado
if (isset($_SESSION['use'])){	
?>

<div id ="cadastrar"><a href="index.php?p=logoff" title="Logout">Logoff &raquo;</a></div>

<div class="message"> Voce ja esta cadrastrado e logado <?php echo $_SESSION['use']['senha'];?> </div>

<?php
}else{
?>

<div id ="cadastrar"><a href="index.php?p=login"title="Faça login!!">Faça Login &raquo;</a></div>

<?php
if(isset($_POST['Nome']) || isset($_POST['Email']) || isset($_POST['Bairro'])
	|| isset($_POST['Cidade']) || isset($_POST['senha']) || isset($_POST['pass']) 
|| (isset($_post['telefone'])) || (isset($_post['CPF']))){
	
	
	    
		function prepara($pre){
                $trim = trim($pre);
                $strip = strip_tags($trim);
                $addsla = addslashes($strip);
                return $addsla;
            }
	
	
	$Nome = prepara(filter_input(INPUT_POST,'Nome'));
	
	$Email = prepara(filter_input(INPUT_POST,'Email'));
	
	$Bairro = prepara(filter_input(INPUT_POST,'Bairro'));
	
	$Cidade = prepara(filter_input(INPUT_POST,'Cidade'));
	
	$Senha  = prepara(filter_input(INPUT_POST,'Senha'));
	
	$Confirma_senha = prepara(filter_input(INPUT_POST,'Pass'));
	
	$Celular = prepara(filter_input(INPUT_POST,'Telefone')); 
	
	$fixo = prepara(filter_input(INPUT_POST,'Celular'));
	
	$CPF =prepara(filter_input(INPUT_POST,'CPF'));
	
	if(empty($Nome)|| empty($Email)|| empty($Bairro)||empty($Cidade)||empty($Senha) 
		|| empty($Confirma_senha) || empty($fixo) || empty($CPF)){
		$tipo="error";		
		$msg="Nao eh possivel preencher campos com espaços";
			
	}elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i",$Email)){
		$tipo="error";
		$msg="Email invalido";			
	
	}elseif(strlen($Senha)<6){
		$tipo="error";
		$msg="Senha muito Curta";
	
	}elseif($Senha!=$Confirma_senha){
		$tipo="error";
		$msg="Senhas nao sao iguais.";
	
	}elseif(empty($Bairro)){
		$tipo="error";
		$msg="Bairro esta em branco";	
	
	}elseif(empty($Cidade)){
		$tipo="error";
		$msg="Cidade esta em branco";	
				
	}else{
		
		//Cadrastra
		
		$SQL ="INSERT INTO smartcar.usuario (nome,email,senha,cidade,fixo,celular,bairro,idLogin,CPF)";
		$SQL .="values('$Nome','$Email',md5('$Senha'),'$Cidade','$fixo','$Celular','$Bairro',3,$CPF	)";
		$Cadastro= mysqli_query($conn,$SQL) or die(mysqli_error($conn));
		$Consulta="SELECT * FROM smartcar.usuario WHERE nome='$Nome' AND email='$Email' AND senha=md5('$Senha') limit 1";
		$Executa_consulta = mysqli_query($conn,$Consulta) or die(mysqli_error($conn));
		$resultado =mysqli_num_rows($Executa_consulta);
		if($resultado==1){
			 
			while($resul = mysqli_fetch_array($Executa_consulta)){
				$tipo ="Sucesso";
				$msg = "Cadrastrado Com Sucesso!!! ".$resul['nome'];
			
			} 
			
		}else{
			$tipo="error";
			$msg = "Error ao cadrastar!!!";		
		}
		
		
	}
	if ($tipo=="error"){
		echo "<div class ='message'>".$msg."<br/><a href=index.php?p=cadastro> Voltar</a></div>";
		
	}elseif($tipo="Sucesso"){
		echo "<div class ='message'>".$msg."<br/></div>";
		header("Refresh: 3; url=index.php?p=Home");
	}
}else{
	
?>

<div class ="logo">
	<a href="index.php?p=Home" title="SmartCar">
    	<img id='logo' src="css/imagens/33.jpg" alt="smartCar" title="SmartCar"/>
	</a>
</div>

<div id ="login" class="bradius">

<div class ="acomodar">

<FORM  NAME="Cadastro" METHOD="POST" CLASS="form" ACTION="<?php $_SERVER['PHP_SELF'];?>" ID='Cadastro' >
	
    <p>Nome completo:<INPUT TYPE="Text" SIZE=27 NAME="Nome" ID="Nome"  title="Digite seu Nome "   /> <span>*</span>
   	
    <p></p>
    
    Email: <INPUT TYPE="Text" SIZE=27 NAME="Email" ID="Email" class="form" title="Digite seu Email"   /><span>*</span>	    
    
    <p></p>
     
    Bairro:<BR/><INPUT TYPE="Text" SIZE=20 NAME="Bairro" ID="Bairro" class="form" title="Digite seu Bairro "  /><span>*</span>
	
    <p>Cidade: <INPUT TYPE="Text" SIZE=26 NAME="Cidade" ID="Cidade" class="form" title="Digite sua Cidade"   /><span>*</span></p>
	
    <label for='Fixo'>Tel. Fixo:</label>		
    <INPUT TYPE="Text" SIZE=20 NAME="Telefone"  id="fixo" class="form" title="Digite seu telefone" /><span>*</span>
	
    <p>Celular:	<INPUT TYPE="Text" SIZE=21 NAME="Celular" ID="Celular" class="form" /><p>
    <p>CPF:	<INPUT TYPE="Text" SIZE=21 NAME="CPF" ID="CPF" class="form" /><p>
     
     <label for ="Senha">Senha:<br /></label>       
     <input ID="Senha" type="password" NAME="Senha"  /><span>*</span>
            
     <label for ="Pass"><br />Comfirma Senha:<br /></label>
  	 <input NAME="Pass" type="password" ID="Pass"   /><span>*</span>
          <P>&nbsp;</P>
              
  	 <input type="submit" value="Enviar" />
    	&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="reset" value="Limpar" />
     
</FORM>

</div>
   	  <h4>&nbsp;</h4>
  </div>
</div>
<?php
	}
}
?>