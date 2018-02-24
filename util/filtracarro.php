<?Php 

	include '../Connections/ConnectionFactory.php';

?>
<style>
#pesquisacarro{
	box-shadow:2px 3px 3px 2px #999;
 	font-size:22px;
 	height:300px;
	width:500px;
 	margin-top:120px !important;
 	padding:20px;
 	text-align:center;
	margin:0 auto}
input[type='submit']{
	width:100px;
	height:25px;	
}
select{
	height:30px;
	font-size:16px;		
}	
</style>
<div id="pesquisacarro">

	<form method="post" action="Debbug.php" >
    	
    	<Label > Pesquisar </label>
        <select name='carro'>
      	<?php
		$sql="select * from faleconosco.veiculo";
		$execute_query= mysqli_query($conn,$sql) or die(mysqli_error($conn));
		while($value_modelo=mysqli_fetch_array($execute_query)){
			echo "<option name=".$value_modelo['versao'].">".$value_modelo['versao']."</option>";
			$carro['versao'] = $value_modelo['versao'];
			$carro['id_veiculo'] = $value_modelo['id_veiculo'];
		}
	?>
        </select><p></p>
    	<input type="submit" />
        
    </form>
	
</div>