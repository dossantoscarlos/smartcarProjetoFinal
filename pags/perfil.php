<?php

if(isset($_SESSION['use'])){
	
$consultaEmail= $_SESSION['use']['email'];

	echo  $consultaEmail;
	$sql_consulta="select * from smartcar.usuario where email='$consultaEmail'";
	
	$Query=mysqli_query($conn,$sql_consulta) or die(mysqli_error($conn));
		
while($Carregar=mysqli_fetch_array($Query)){
			
	
?>
<div class="logo">
	<a href="index.php?p=Home" title="SmartCar">
    	<img id='logo' src="css/imagens/33.jpg" alt="smartCar" title="SmartCar"/>
	</a>
</div>

<div id ="login" class="bradius">

<div class="acomodar">
<FORM  NAME="Cadastro" METHOD="POST" CLASS="form" ACTION="<?php $_SERVER['PHP_SELF'];?>" ID='Cadastro' >
	
    <p>Nome completo:<INPUT TYPE="Text" SIZE=27 NAME="Nome" ID="Nome"  title="Digite seu Nome"  value="<?php echo $Carregar['nome']; ?>"  />
   	
    <p></p>
    
    Email: <INPUT TYPE="Text" SIZE=27 NAME="Email" ID="Email" class="form" title="Digite seu Email"  value="<?php echo $Carregar['email']; ?>" />	    
    
    <p></p>
     
    Bairro:<BR/><INPUT TYPE="Text" SIZE=20 NAME="Bairro" ID="Bairro" class="form" title="Digite seu Bairro "  value="<?php echo $Carregar['bairro'];?>"/>
	
    <p>Cidade: <INPUT TYPE="Text" SIZE=26 NAME="Cidade" ID="Cidade" class="form" title="Digite sua Cidade"  value="<?php echo $Carregar['cidade']; ?>" /></p>
	
    <label for='Fixo'>Tel. Fixo:</label>		
    <INPUT TYPE="Text" SIZE=20 NAME="Telefone"  id="fixo" class="form" title="Digite seu telefone"  value="<?php echo $Carregar['fixo']; ?>" />
	
    <p>Celular:	<INPUT TYPE="Text" SIZE=21 NAME="Celular" ID="Celular" class="form" value="<?php echo $Carregar['celular']; ?>" /><p>
     
     
  	 <input type="submit" value="salvar Dados" />
    	&nbsp;&nbsp;&nbsp;&nbsp;
     
</FORM>

</div>
   	  <h4>&nbsp;</h4>
  </div>
</div>
<?php 
	}
	
	if(isset($_POST['Nome']) || isset($_POST['Email']) || isset($_POST['Bairro'])
	|| isset($_POST['Cidade'])){
	
	
	    
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
	
	$Celular = prepara(filter_input(INPUT_POST,'Telefone')); 
	
	$Fixo = prepara(filter_input(INPUT_POST,'Celular'));
	
	if(empty($Nome)|| empty($Email)|| empty($Bairro)||empty($Cidade)){
		$tipo="error";		
		$msg="Nao eh possivel preencher campos com espaços";
			
	}elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i",$Email)){
		$tipo="error";
		$msg="Email invalido";				
	}elseif(empty($Bairro)){
		$tipo="error";
		$msg="Bairro esta em branco";	
	
	}elseif(empty($Cidade)){
		$tipo="error";
		$msg="Cidade esta em branco";
	}else{
		
		$update="update smartcar.usuario set bairro='$Bairro' , cidade='$Cidade' , fixo='$Fixo' ,celular='$Celular'";
		
		$update.=",email='$Email' where email='$consultaEmail'";
		
		$sql_consulta=mysqli_query($conn,$update) or die("Error na atualizacao :".mysqli_error($conn));
		
		if (mysqli_error($conn)){
		
		
		}else{
			
			unset($_SESSION['use']);
			header("Location: index.php");
					
		}
		
		
	}
	
  }
}
?>