<style>
.div_recupera{
	
	background-color:#c6dce9 !important;
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
    
	$("#Recuperesuasenha").submit(function (){
			
		var cpf=$("#CPF").val(); 
	
		if(cpf.length>11 || cpf.length<11){
			
			alert("CPF invalido");
			
			return false;
	
		}
		
					
				
	});
	
	
});


</script>



<div class="abaixo">

<div class="div_recupera">

<Form METHOD="POST" Name="Recuperesuasenha" id="Recuperesuasenha"  >

<span class="rotulo">Esqueceu sua senha</span><p>
    <label>Digite seu CPF: &nbsp;</label><INPUT TYPE="Text" SIZE=15 NAME="CPF" ID="CPF" placeholder="111.111.111-11" />
    <br><br>
  <input type="submit" value="Enviar" />


</Form> 
</p>
</p>
</div>
</div>
<?php 

if(@$msg==="Erro Cpf nao cadrastrado"){
	echo "<span class='message'>".$msg."</span>";		
	
}


if (isset($_POST['cpf'])){
	
	$cpf_valida=trim($_POST['cpf']);

	if (!empty($cpf_valida)){
		
		$sql="Select *  from usuario where cpf='$cpf_valida'";
		$consulta_cpf= mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if (mysqli_num_rows($consulta_cpf)==1){
			
			while($res=mysqli_fetch_array($consulta_cpf)){
				$recupera['cpf'] = $res['cpf'];				
				$_SESSION['recuperaSenha'] = $recupera;
				header("Location: index.php?p=rP");
			}
		}
	}
}else{
	header("refersh: url=index.php?p=rC");
	 $msg="Erro Cpf nao cadrastrado";
	
}
	
	
?>