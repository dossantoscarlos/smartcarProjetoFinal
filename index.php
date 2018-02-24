<!Doctype html>
<html>
<head>
<meta charset="utf-8"/>
<?php 
require_once('Connections/ConnectionFactory.php');
ob_start();
session_start();
?>
<title>
<?php  if(isset($_GET['p'])){
		
		function tira_injector($pre){
                $trim = trim($pre);
                $strip = strip_tags($trim);
                $addsla = addslashes($strip);
                return $addsla;
			}
			
		@$p=tira_injector($_GET['p']);		
		
		
		$Title="Select * from links where linkCurto='$p'";
		
		$titulo = mysqli_query($conn,$Title) or die(mysqli_error($conn));
		
		if (mysqli_num_rows($titulo)==1){
			
			while($resul=mysqli_fetch_array($titulo)){
				$title=$resul['title'];
			}
		}else{
			$title="Pagina not Found";
		}
	}else{
		$title="SmartCar: Home";
	}
	echo $title;
?>
</title>
<?php 
require_once('Css/script.php');

?>
</head>
<body>
<?php 
require_once('util/Banner.php');
require_once('util/Menu.php');

if (isset($_GET['p'])){		
		$pa=tira_injector($_GET['p']);		
		$sql="Select * from links where LinkCurto='$pa'";
		$connect = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		if (mysqli_num_rows($connect)==1){
			
			while($resul=mysqli_fetch_assoc($connect)){
				$pag=$resul['url'];
				
				require ''.$pag.'';
				require 'util/Mascote.php';
			}
		}else{
			echo "Pagina not Found";
		}
	}else{
			require 'util/inicio.php';
			require 'util/Mascote.php';
			require 'util/rodape.php';
		
	}

ob_end_flush();
?>
</body>
</html>
