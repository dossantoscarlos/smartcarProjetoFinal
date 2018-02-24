<style>
.div_encontra{
	
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
input[Type='button']{
	margin-left:30% !important; 
	height:40px !important;
	width:100px;
}
</style>

<script>

	$(document).ready(function() {
        
		$("#envia").click( function(){
				
			document.location=("index.php?p=login");
		});
		
    });
	
</script>

<?php 

if (!isset($_SESSION['recuperaSenha']['cpf'])){
?>

<div class="abaixo">
<div class="div_encontra">

<Form  METHOD="POST" Name="encontresuasenha" id="encontresuasenha"  >
<input type="hidden" value="index.php?p=login"/>
<span class="rotulo">Caro usuario sua senha foi redefinida com sucesso!</span><p></p>
<span class="rotulo">Precione ACESSO e entre no sistema,obrigado.</span><p></p>
<input type="Button" id="envia" value="Acesso" >
</Form>
<p></p> 
</div>
</div>
<?php
unset($_SESSION['recuperaSenha']);
}else {
	
	echo "Voce nao tem permisao pra essa pagina";
	
}





?>