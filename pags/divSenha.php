<?php 

if(!isset($_SESSION['recuperaSenha']['cpf'])){

@$CPF=$_SESSION['recuperaSenha']['cpf'];
?>
<style>
.div_encontra{
	
	background-color: #c6dce9 !important;
	border: 2px solid lightgray !important;
	width: 400px !important;
	dispaly:block !important;
	margin:0 auto !important;
	padding-top:30px !important;
	padding-left:30px !important;
	box-shadow:12px 12px 5px #ccc !important;
}
.rotulo {
	color:black !important;
}
input{
	
	box-shadow:5px 5px 5px #ccc !important;  
	
}
.abaixo{
	
		margin-top:100px;	
		margin-bottom:-12%;
	}
input[Type='submit']{
	margin-left:40% !important; 
	height:40px !important;

}
</style>
<script>
	$(document).ready(function() {
        
		jQuery("#Form_Recupera").submit( function(){
				
				var Senha = $("#pass").val();
				var pass  = $("#senha").val();
										
				if(Senha.length==0){
					
					alert("Senha em branco");
					
					$("#senha").focus;
					
					return false;
						
				}else if(pass.length==0){
				
					alert("Senha em branco ");
					
					$("#pass").focus;
					
					return false;
				
				}else if(Senha===pass){
				
					alert("Senhas nao conferem");
						
					$("#senha").focus;
					
					return false;	
				
				}
			}
		);
		
		
    });
</script>
<div class="abaixo">
  <div class="div_encontra">
  <Form METHOD="POST" Name="encontresuasenha"  >
  	<span class="rotulo">Sistema de Recuperação de senha</span><p></p>
    <span class="rotulo">CPF Encontrado</span><p></p>
    <label>Digite a nova senha: &nbsp;</label><INPUT TYPE="Text" SIZE=15 NAME="Telefone" ID="CPF" placeholder="**********" />
     <br><br>
     <label>Digite novamente: &nbsp;</label><INPUT TYPE="Text" SIZE=15 NAME="Telefone" ID="CPF" placeholder="**********" />
      <br><br /> 
    <input type="submit" value="Enviar" />
    </Form>
    <p></p> 
   </div>
 </div>
<?php 

if(isset($_POST['pass']) || isset($_POST['senha'])){
	
	$pass_valida = trim($_POST['pass']);
	$senha_valida= trim($_POST['senha']);
	
	if ($pass_valida!="" && $senha_valida!=""){
	
	   if ($pass_valida===$senha_valida){
			$SQL="update usuario set senha=md5($senha)";
			$query= mysqli_query($conn,$SQL) or die(mysqli_error($conn));
			$SQL_consulta = "select * from usuario where cpf='$CPF' and  senha=md5('$senha_valida');"; 
			if (mysqli_num_rows($SQL)>1){
				header("Location: index.php?p=rR");
			}
		}else{	
			echo "<span class='message'>rror</span>";
		}
	}else {
	
		echo  "digite algo";
	}
  }
}?>