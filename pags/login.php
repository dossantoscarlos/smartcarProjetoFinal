<?php
//se logado 

if (isset($_SESSION['use'])){

		
}else{
	
?>
<section>
<?php
$msg="";
	if(isset($_POST['Email']) || isset($_POST['Senha'])){
			    
            function prepara($pre){
                $trim = trim($pre);
                $strip = strip_tags($trim);
                $addsla = addslashes($strip);
                return $addsla;
            }
            
		$Email = prepara(filter_input(INPUT_POST,'Email'));
		$Senha = prepara(filter_input(INPUT_POST,'Senha'));
		
		if (!empty($Email) || !empty($Senha)){
			
			if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i",$Email)){
				
				if(strlen($Senha)>5){
					
					$sql ="SELECT * FROM  smartcar.usuario u , smartcar.logins l WHERE u.email='$Email' AND  u.senha= md5('$Senha')  and u.idLogin=l.idLogin limit 1";
					$executa_query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
					$consulta = mysqli_num_rows($executa_query);
					if ($consulta==1){
						
						while($capturaValues = mysqli_fetch_array($executa_query)){
							
							$user['id']      = session_id();
							$user['on']      = time();
							$user['end']     = time() + 60; 
							$user['email']   = $capturaValues['email']; 
							$user['senha']   = $capturaValues['senha'];
							$user['nome']	 = $capturaValues['nome'];
 							$user['ip']      = $_SERVER['REMOTE_ADDR'];
							$user['nivel']   = $capturaValues['nivel'];
							
							$nivel = $user['nivel'];
							if ($user['nivel']==4){
								$user['controle']= md5(session_id());
							}								
						}
						
						
							$_SESSION['use'] = $user;
							
							$Home="index.php";
							
							header("Location: ".$Home);
						
					}else{
						$msg="Usuario inexistente";
					}
				}else{
					$msg="Senha muito curta minimo de 6 caracteres";
				}
			}else{		
				$msg="Email esta invalido";
			}
		}else {		
			$msg="Campos estao vazios";
		}
		echo "<div class='message'>".$msg."</div>";			

	}
	

?>

    <div class="logo bradius">
		<a href="index.php?p=Home" title="SmartCar">
    		<img id="logo"  src="css/imagens/33.jpg" alt="SmartCar" title="SmartCar"/>
   		</a>
	</div>
<div id="login" class="form bradius">
	<div class="acomodar"> 
		<form name="Login" id="Login" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			
            <label for="Email">Email</label>
			<input id ="Email" size=20 type="Text" name="Email" title="Digite seu email" required/>
			
            <label for="Senha">Senha</label>
			<input id="Senha" maxlength="64" type="password" name="Senha" title='Digite sua senha' required/>
			 
            <input type="submit" class="sb" value="Entrar" title="Logar"/>
	</form>
    
    <ul class="uri">
    	<li><a href="index.php?p=rC">Recupere sua senha</a></li>
    </ul>
    
	</div>
  </div>
<?php
}
?>
</section>