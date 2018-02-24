<html>
<head>
<meta charset="utf-8">
<style> 

.div_agendar{
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
.div_agendar #logo{
	width:370px;

}

.div_agendar #icon{
	padding-left:20%;
	padding-bottom:20px;

}
.div_agendar #limpar{
	background-color:red;
	height:40px;
	 
	

}

.div_agendar #agendar{
	background-color:red;
	height:40px;
	margin-left:10%; 
	

}
</style>
<div class="div_agendar">
<img id="icon"  src="imagens/so Nome.png" alt="tituloSmartCar" title="tituloSmartCar"/>
   		</a>
<img id="logo"  src="imagens/rotul agserv.png" alt="tituloSmartCar" title="tituloSmartCar"/>
   		</a>


<FORM  NAME="Cadastro" METHOD="POST" CLASS="form" ACTION="<?php $_SERVER['PHP_SELF'];?>" ID='Cadastro' >
	
    <p>Nome completo:<INPUT TYPE="Text" SIZE=27 NAME="Nome" ID="Nome"  title="Digite seu Nome "   />
   	
    <p></p>
    
    Email: <INPUT TYPE="Text" SIZE=27 NAME="Email" ID="Email" class="form" title="Digite seu Email"   />	    
    
    <p></p>
     
    <span>Telefone:</span>
    <INPUT TYPE="Text" SIZE=15 NAME="Telefone" ID="Telefone" placeholder="(21)99999-9999" />
    <br><br>
	
    <span>CPF:</span>
    <INPUT TYPE="Text" SIZE=15 NAME="Telefone" ID="CPF" placeholder="111.111.111-11" />
    <br><br>
    
  <SELECT MUTIPLE NAME="Escolha seus serviços">
	<option value="dia">DIAGNÓSTICOS</option>
    <option value="mec">MECÂNICA</option>
    <option value="ele">ELÉTRICA</option>
    <option value="cap">CAPOTARIA</option>
     <option value="lan">LANTERNAGEM</option>
    <option value="pin">PINTURA</option>
	
	</SELECT>
	
    <SELECT MUTIPLE NAME="Data de Agendamento">
	<option value="1">a</option>
    <option value="2">b</option>
    <option value="3">c</option>
    <option value="4">d</option>
     <option value="5">e</option>
    <option value="6">f</option>
     
    </SELECT>	
	
    <br><br>
	
     <SELECT MUTIPLE NAME="Tipos de Carro">
	<option value="uno">Uno</option>
    <option value="punto">punto</option>
    <option value="palio">palio</option>
    <option value="paliomidi">palio midi</option>
     <option value="unonovo">uno 2015</option>
   
    </SELECT>	
    
     <SELECT MUTIPLE NAME="Hórario de Agendamento">
	<option value="m">9h00</option>
    <option value="ma">11h</option>
    <option value="t">13h</option>
    <option value="ta">15h</option>
     <option value="tar">17h</option>
    <option value="tard">18h</option>
     
    </SELECT>	
	
	<br><br>
              
  	 <input type="submit" value="Agendar Serviço" id="agendar"/>
    	&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="reset" value="Limpar Campos" id="limpar"/>
     
</FORM>