<?php if(isset($_SESSION['use']['nivel'])==4){

	
	echo "<p><center><span class='message'>Voce eh admin</span></center>";
	echo "<div width=400px class='form-faleconosco'>
		</div>";

}else {
?>
<style>input{font-size:14px !important;}</style>

<div id="clear"></div>
		<div id="corpo-faleconosco">
        	<div class="form-faleconosco">
        <h3>Fale conosco</h3>
        <br><br>
 <?php
  
 if(isset($_POST['Nome'])|| isset($_POST['Endereco'])|| isset($_POST['Bairro'])
                || isset($_POST['Mensagem']) ||isset($_POST['Email']) || isset($_POST['Cidade'])
            ||isset($_POST['Telefone'])){
            
            
            
            function prepara($pre){
                $trim = trim($pre);
                $strip = strip_tags($trim);
                $addsla = addslashes($strip);
                return $addsla;
            }
            
            $Nome      = prepara(filter_input(INPUT_POST,"Nome"));
            
			$Endereco  = prepara(filter_input(INPUT_POST,"Endereco"));
            
			$Bairro    = prepara(filter_input(INPUT_POST,"Bairro"));
            
			$Mensagem  = prepara(filter_input(INPUT_POST,"Mensagem"));
            
			$msg_enviada = nl2br($Mensagem);
			
			$Email     = prepara(filter_input(INPUT_POST,"Email"));
            
			$Telefone  = prepara(filter_input(INPUT_POST,"Telefone"));
            
			$Cidade    = prepara(filter_input(INPUT_POST, "Cidade"));
            
			
			
            if (!empty($Nome)&& !empty($Endereco) && !empty($Bairro)&& !empty($Mensagem)
                    && !empty($Email) && !empty($Cidade) && !empty($Telefone)){
	
                if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i",$Email)){  
                    
                    if(preg_match("/^([1-9])+([0-9])+([9]{1})+([0-9]{4})+([0-9]{4})$/",$Telefone)){
						 
						//cadrastra no banco de dados 
						
							
							$sql="insert into smartcar.post(nome,endereco,bairro,telefone,cidade,mensagem)";
							$sql.="values('$Nome','$Endereco','$Bairro','$Telefone','$Cidade','$msg_enviada')";
							$cadastra = mysqli_query($conn,$sql) or die("<span Class='span_mensagem'>".mysqli_error($conn)."</span>");
							
							$consulta ="SELECT * FROM smartcar.post WHERE mensagem='$Mensagem'";
							$executa_consulta = mysqli_query($conn,$consulta) or die (mysqli_error($conn));		  
							
							if (mysqli_num_rows($executa_consulta)==1){              
							
								while($result= mysqli_fetch_array($executa_consulta)){
									echo "<span Class='span_mensagem'>Mensagem enviada com sucesso!!!</span>";
								}
							}
					}else{
						 echo "<span Class='span_mensagem'>Telefone invalido</span>";
					}
                }else{      
                    echo "<span Class='span_mensagem'>erro no Email</span>";
                } 
            
           }else{
               echo "<span Class='span_mensagem'>Campos em branco</span>";
           }
            
        
        }else{
    /* @var $_SERVER type */
    
     ?>
     
     <FORM  ID="Form_POST" METHOD="POST" action="<?php filter_input(INPUT_SERVER,'PHP_SELF'); ?>">
	<span>Nome:</span>
	<INPUT TYPE="Text" SIZE=15 NAME="Nome" ID="Nome" placeholder="Nome Completo" />
     <span>Endereço:</span>
	<INPUT TYPE="Text" SIZE=15 NAME="Endereco" ID="Endereco" placeholder="Rua Miguel Bastos" />
    <br><br>
    <span>Email:</span>
	<INPUT TYPE="Text" SIZE=16 NAME="Email" ID="Email" placeholder="email@email.com.br" />
   	<span>Celular:</span>
    <INPUT TYPE="Text" SIZE=15 NAME="Telefone" ID="Telefone" placeholder="(21)99999-9999" />
    <br><br>
	<span>Bairro:</span>
	<INPUT TYPE="Text" SIZE=16 NAME="Bairro" ID="Bairro" >
    <span>Cidade:</span>
	<INPUT TYPE="Text" SIZE=16 NAME="Cidade" ID="Cidade" >
    <br><br>
    <span>Mensagem:</span>
    <br>
    <TEXTAREA ROWS=5 COLS=52 NAME="Mensagem" ID="Mensagem" ></TEXTAREA>

	<br><Br>
    
			<input type="Submit" value="Enviar"  id="Enviar">
        	<input type="reset" value="Limpar" >
        </FORM>

     
<?php
		}

?>  
   </div>
 
         <div class="tel-faleconosco">
            	<h3>Contato</h3>
                <br><br/>
                <h4>Endereço:</h4>
                <span>Estr. Intendente Magalhães, n° 1847 - Valqueire</span>
                <br/>
                <span>CEP: 21.341-332 - Rio de Janeiro - RJ</span>
                <br/>
                <h4>Telefone:</h4>
                <span>(21)3484-5243</span>
         </div>
            <br/><br/>
            
            	<h3>NOSSA CONCESSIONÁRIA</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3675.996180326166!2d-43.372622!3d-22.876599499999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99625e6300a129%3A0xb0bb888fea20d27a!2sEstr.+Intendente+Magalh%C3%A3es%2C+1847+-+Vila+Valqueire%2C+Rio+de+Janeiro+-+RJ%2C+21341-332!5e0!3m2!1spt-BR!2sbr!4v1430936391414" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
            
<?php 

}
?>    
    
    	</div>
     <div id="clear"></div>
	<div id="rodape" style='color:white !important'>
  			<img src="img/15.png"/>
            <div><b>HORÁRIO DE ATENDIMENTO:</b>
            <br>Vendas - Segunda a Sexta: 8h às 18h | Sábados: 8h às 15h | Domingos: 8h às 13h 
            <br>Demais deparetamentos: 8h às 12h
            <br><br>
            <i> © 2015 Todos os direitos reservados por <b>Fiat SmartCar</b></i></div>        
    </div>
