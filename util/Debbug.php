<?php 
include '../Connections/ConnectionFactory.php';


if(isset($_POST['carro'])){

	$Carro=$_POST['carro'];
	
	echo "$Carro";
	
	$sql="Select * from smartcar.veiculo c inner join smartcar.opcional s  on  s.modelo_carro=c.modelo where versao='".$Carro."'";
	$exec = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	
	if(mysqli_num_rows($exec)>0){
		
		while($exibe=mysqli_fetch_array($exec)){		
			echo "modelo: ".$exibe['modelo']."<p>Cor:".$exibe['cor']."<p>opcional:".$exibe['tipo_ocpional'];
		}
	}

	echo "<hr/>";
	$sql_seguro="select * from smarcar.seguro";
	$exec_Seguro = mysqli_query($conn,$sql_seguro) or die(mysqli_error($conn));
	
	if(mysqli_num_rows($exec_seguro)>0){
		
		while($exibe_seguro=mysqli_fetch_array($exec_seguro)){		
			echo "modelo: ".$exibe_seguro['nome_Seguradora'];
		}
	}
}