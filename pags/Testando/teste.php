<?php

@define (SEVERNAME ,'localhost');
@define (USERNAME ,'root');
@define (PASSWORD ,'');
@define (DBNAME , 'faleconosco');


// Create connection
$conn = mysqli_connect(SEVERNAME, USERNAME,PASSWORD) or die(mysqli_error($conn));        

//selecionando o banco de dados
$DB =  mysqli_select_db($conn, DBNAME) or die(mysqli_error($conn));



?>
<html>
<head>
<title>Testando</title>
<link href="css/styleLogin.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id ="login" class="bradius">
<div class ="acomodar">
<FORM  NAME="Cadastro" METHOD="POST" CLASS="form"  ID='Cadastro' >
	
<div class ="logo">
	<a href="index.php?p=Home" title="SmartCar">
    	<img id='logo' src="css/imagens/33.png" alt="smartCar" title="SmartCar"/>
	</a>
</div>	
	<h1><br><br><br>Agende seu serviço</h1>
    <p><br/><p>Nome completo:<INPUT TYPE="Text" SIZE=40 NAME="Nome" ID="Nome"  title="Digite seu Nome "   />
   	
    <p></p>
    
    <br/>Email: <br/></p><INPUT TYPE="Text" SIZE=27 NAME="Email" ID="Email" class="form" title="Digite seu Email"   />	    
    
    <p></p>
	<label for='Fixo'>Tel. Fixo:<br /></label>		
    <INPUT TYPE="Text" SIZE=20 NAME="Telefone"  id="fixo" class="form" title="Digite seu telefone" />

	<p></p>
    <br/>
    <p>Digite o cpf para agilizar seu atendimento: <br><INPUT TYPE="Text" SIZE=14 NAME="Cpf" ID="Cpf" class="form" /><p>

	
     <label for ="Senha">Senha:<br /></label>       
     <input ID="Senha" type="password" NAME="Senha"  />
            
     <label for ="Pass"><br />Comfirma Senha:<br /></label>
  	 <input NAME="Pass" type="password" ID="Pass"   />
          <P>&nbsp;</P>
		  
	<select name="carro" id="carr0">
		<?php 
        	
            $sql = "select * from smartcar.veiculo";
            $connect = mysqli_query($conn,$sql) or die (mysqli_error($conn));
            if (mysqli_num_rows($connect)>0){
            
            	while($sol=mysqli_fetch_array($connect)){
					
					$res['versao'] = $sol['versao'];
					
            		echo "<option value='".$res['versao']."' name='".$res['versao']."'>".$res['versao']."</option>";	
				}
            
            }
        ?>
    </select> <br><br><br>

		<select name="servicos" id="servicos">
		<option value="">Selection</option>
		<option value="mecanica">MecÂnica Elétrica</option>	
		<option value="capotaria">Capotaria</option>
		<option value="lanternagem">Lanternagem</option>
		 </select>  <br><br><br>
		  
		  <select name="data" id="data">
		<option value="">Selection</option>
		<option value="01">01</option>	
		<option value="02">02</option>	
		<option value="03">03</option>	
		<option value="04">04</option>	
		<option value="05">05</option>	
		<option value="06">06</option>	
		<option value="07">07</option>	
		<option value="08">08</option>	
		<option value="09">09</option>	
		<option value="10">10</option>	
		<option value="11">11</option>	
		<option value="12">12</option>	
		 </select> <br><br><br>
		 
<div class="styled-select.slate">		 
		 <select name="data" id="data">
		<option value="">Selection</option>
		<option value="01">Janeiro</option>	
		<option value="02">Fevereiro</option>	
		<option value="03">Março</option>	
		<option value="04">Abril</option>	
		<option value="05">Maio</option>	
		<option value="06">Junho</option>	
		<option value="07">Julho</option>	
		<option value="08">Agosto</option>	
		<option value="09">Junho</option>	
		<option value="10">Julho</option>	
		<option value="11">Agosto</option>	
		<option value="12">Setembro</option>	
		 </select> <br><br><br>
</div>              
		  
<div class ="myButton">Enviar</div>	 

<div class ="myButton">Limpar</div>     
</div>

	

</FORM>



</body>



</html>