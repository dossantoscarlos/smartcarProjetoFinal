<?php
	
if(isset($_GET['p'])){
	
	switch($_GET['p']){
		
		case 'Home':
			echo'SmartCar: Home';
			break;
		
		case 'faleconosco':
			echo'SmartCar: Fale conosco';
			break;
		
		case 'servicos':
			echo "SmartCar: Nossos serviços";
			break;
		
		case 'cadastro':
			echo "SmartCar: Cadastre-se";
			break;
		
		case 'login':
			echo 'SmartCar: Login';
			break;
		
		case 'acessorios':
			echo'SmartCar: Acessorios';
			break;
		
		case '0KM':
			echo 'SmartCar: Nossos carros';
			break;
			
		case 'novouno2015';
			echo 'SmartCar: Novo Uno 2015';
			break;
			
		case 'uno2015';
			echo 'SmartCar: Uno 2015';
			break;
			
		case 'strada2015';
			echo 'SmartCar: Strada 2015';
			break;
		
		case 'weekend2015';
			echo "SmartCar: Weekend 2015";
			break;
		
		case 'siena2015';
			echo 'SmartCar: Siena 2015';
			break;
		
		case 'novopaliofire2015';
			echo 'SmartCar: Novo palio fire 2015';
			break;
		
		case 'novopalio2015';
			echo 'SmartCar: Novo palio 2015';
			break;
		
		case 'novolinea2016';
			echo 'SmartCar: Novo linea 2016';
			break;
		
		case 'novopunto2016';
			echo 'SmartCar: Novo punto 2016';
			break;
		
		case 'novobravo2016';
			echo 'SmartCar: Novo bravo 2016';
			break;
		
		case 'idea2016';
			echo 'Smart Car: Novo uno 2015';
			break;
		
		case 'doblo2015';
			echo 'SmartCar: Doblo 2015';
			break;
			
		case 'fiat5002015';
			echo 'SmrtCar: Fiat 500 2015';
			break;
		case 'fiat500abarth2015';
			echo 'SmartCar: Fiat 500 Abarth 2015';
			break;
			
		case 'freemont2015';
			echo 'SmartCar: Free mont 2015';
			break;
			
		case 'grandsiena2015';
			require 'SmartCar: Grand Siena 2015';
			require 'util/cadastre_se.php';
			break;

		default:
			echo 'SmartCar: Error';
			break;
	}
}else{
	echo "SmartCar: Home";	
}
