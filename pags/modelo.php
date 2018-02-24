	<!-- <div id="corpo-central"> -->
	

<div id ="login" class="bradius" width="700px" height="500px" >
<div class ="acomodar"   width="500px" height="500px">	
	<div class ="logo">
	<a href="index.php?p=Home" title="SmartCar">
    	<img id='logo' src="pags/css/imagens/33.png" width="400px" height="250px" alt="smartCar" title="SmartCar"/>
	
	</a>
	<br><br>
	</div>	

	
	
	<div class="div-select">
	<br><br><br><br><br><br>	
	
    <form action="<?php $_SERVER['PHP_SELF']; ?>"  method="post">
    <select name="select_carros" id="carros">
	<option value="carros">Carros</option>
	<?php
		$sql="select * from smartcar.veiculo";
		$execute_query= mysqli_query($conn,$sql) or die(mysqli_error($conn));
		while($value_modelo=mysqli_fetch_array($execute_query)){
			echo "<option value=".$value_modelo['versao'].">".$value_modelo['versao']."</option>";
			$carro['versao'] = $value_modelo['versao'];
			$carro['id_veiculo'] = $value_modelo['id_veiculo'];
		}
	?>
	</select>
   <input type="submit" />
</form>
    <?php
     	if (isset($_Post[''])){
	 ?>
    <br>
	</div>
	<div class="div-select">
	
	<select name="modelos" id="modelos">
		<option value="modelo">Modelos</option>
		<?php
			
			$model=$_POST['select_carros'];
			
			$modelo="select * from samrtcar.veiculo where modelo='".$model."' and id_veiculo='".$carro['id_veiculo']."' ";
			
			$consultaModelo= mysqli_query($conn,$modelo) or die (mysqli_error($conn));		
			
			while($value=mysqli_fetch_array($consultaModelo)){		
			
				echo "<option value=".$value['modelo'].">".$value['modelo']."</option>";
			}
		?>
	</select> <br>
	</div>
	
	
	<div class="div-select">
	<select name="cor" id="cor">
	<option value="cor">Cor</option>
	<?php
		echo "<option value=".$value['cor'].">".$value['cor']."</option>";
	?>
	</select> <br>
	</div>
	
	<div class="div-select">	
	<select name="seguro" id="seguro">
	<option value="seguro">Seguro</option>
	<?php
		echo "<option value=".$value['nome_seguradora'].">".$value['nome_seguradora']."</option>";
	?>
	</select> 
	</div>
	
	<div class="div-select">
	<select name="acessorios" id="acessorios">
	<option value="">Acessórios</option>
	<?php	
		echo "<option value=".$value['tipo_opcional'].">".$value['tipo_opcional']."</option>"; 	
	
		}
	?>
	</select> <br>
	</div>
	
	
	<div class="div-select">	
	<form>	
	<INPUT TYPE="checkbox"
	NAME="OPCAO" VALUE="op1">KIT CONFORT - MUDANÇA BANCO
	<br><INPUT TYPE="checkbox"
	NAME="OPCAO" VALUE="op2">SENSOR DE ESTACIONAMENTO TRASEIRO
	<br><INPUT TYPE="checkbox"
	NAME="OPCAO" VALUE="op3">KIT CONTROL - ALARME
	<br><INPUT TYPE="checkbox"
	NAME="OPCAO" VALUE="op4">opcao4
	<br><INPUT TYPE="checkbox"
	NAME="OPCAO" VALUE="op5">opcao5
	
	</form>
	</div>
	
	<div class ="myButton">Enviar</div>	 

<div class ="myButton">Limpar</div>     
</div>
	
		 <!--<div id="parteum-corpo">
			
			
		</div> -->
		
		
		<div id="partetres-corpo"  >
			<img id='logo' src="pags/carro (1).jpg" width="400px" height="250px" alt="smartCar" title="SmartCar"/>
		</div>

</div>		
</div>

	
	
</body>
</html>