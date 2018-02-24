<?php
	
if(isset($_GET['p'])){
	
	switch($_GET['p']){
		
		case 'Home':
			require 'util/inicio.php';
			require 'util/cadastre_se.php';
			require 'util/rodape.php';
			break;
		
		case 'faleconosco':
			require 'pags/faleconosco.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'servicos':
			require "pags/servicos.php";
			require 'util/cadastre_se.php';
			break;
		
		case 'cadastro':
		
			require "pags/cadastro.php";
			break;
		
		case 'login':
		
			require 'pags/login.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'acessorios':
		
			require 'pags/acessorios.php';
			require 'util/cadastre_se.php';
			break;
		
		case '0KM':
		
			require 'pags/carros.php';
			require 'util/cadastre_se.php';
			break;
			
		case 'novouno2015';
		
			require 'pags/conhecaseucarro/novouno2015.php';
			require 'util/cadastre_se.php';
			break;
			
		case 'uno2015';
		
			require 'pags/conhecaseucarro/uno2015.php';
			require 'util/cadastre_se.php';
			break;
			
		case 'strada2015';
		
			require 'pags/conhecaseucarro/strada2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'weekend2015';
		
			require 'pags/conhecaseucarro/weekend2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'siena2015';
		
			require 'pags/conhecaseucarro/siena2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'novopaliofire2015';
		
			require 'pags/conhecaseucarro/novopaliofire2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'novopalio2015';
		
			require 'pags/conhecaseucarro/novopalio2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'novolinea2016';
		
			require 'pags/conhecaseucarro/novolinea2016.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'novopunto2016';
		
			require 'pags/conhecaseucarro/novopunto2016.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'novobravo2016';
		
			require 'pags/conhecaseucarro/novobravo2016.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'idea2016';
		
			require 'pags/conhecaseucarro/novouno2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'doblo2015';
		
			require 'pags/conhecaseucarro/doblo2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'fiat5002015';
		
			require 'pags/conhecaseucarro/fiat5002015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'fiat500abarth2015';
		
			require 'pags/conhecaseucarro/fiat500abarth2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'freemont2015';
		
			require 'pags/conhecaseucarro/freemont2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'grandsiena2015';
			
			require 'pags/conhecaseucarro/grandsiena2015.php';
			require 'util/cadastre_se.php';
			break;
		
		case 'appsmartcar';
			
			require 'pags/appsmartcar.php';
			require 'util/cadastre_se.php';
			break;
			
		case 'logoff':
					
				unset($_SESSION['use']);	
				header("Location:".$_SERVER['PHP_SELF']);	
				break;
		
		default:
			require'util/cadastre_se.php';
			require ('util/ERROR.php');
			break;
	}
}else{
	require 'util/inicio.php';
	require 'util/cadastre_se.php';
	require 'util/rodape.php';
}
