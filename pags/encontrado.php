
<html>
<head>
<meta charset="utf-8">

<style> 
.div_encontra{
	background-color: c6dce9;
	border: 2px solid lightgray;
	width: 400px;
	dispaly:block;
	margin:0 auto;
	padding-top:30px;
	padding-left:30px;
	box-shadow:12px 12px 5px #ccc;
}
.rotulo {
	color:black;
}

input{
	
	box-shadow:5px 5px 5px #ccc;
}

input[Type='text']{
	margin-left:20px;
}

input[Type='submit']{
	margin-left:40%;
	height:40px;

}

</style>
<div class="div_encontra">

<Form METHOD="POST" Name="encontresuasenha"  >
<span class="rotulo">Sistema de Recuperação de senha</span><p>
<span class="rotulo">CPF Encontrado</span><p>
    <label>Digite a nova senha: &nbsp;</label><INPUT TYPE="Text" SIZE=15 NAME="Telefone" ID="CPF" placeholder="**********" />
    <br><br>
	<label>Digite novamente: &nbsp;</label><INPUT TYPE="Text" SIZE=15 NAME="Telefone" ID="CPF" placeholder="**********" />
    <br><br>
    

<input type="submit" value="Enviar" />


</Form> 
</html>