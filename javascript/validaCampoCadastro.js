// JavaScript cadastro

jQuery(document).ready(function() {
    
	jQuery("#Cadastro").submit( function (){	
			var regex_email    = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
       		var regex_celular  =  /^([1-9])+([0-9])([9]{1})+([2-9]{4})+([0-9]{4})$/;
        	var regex_fixo     = /^([1-9])+([0-9])+([2-6]{4})+([0-9]{4})$/;
        
			var Nome    = jQuery("#Nome").val();
			var Email   = jQuery("#Email").val();
			var Bairro  = jQuery("#Bairro").val();
			var Cidade  = jQuery("#Cidade").val();
			var Fixo    = jQuery("#Fixo").val();
			var Celular = jQuery("#Celular").val();
			var Senha   = jQuery("#Senha").val();
			var Pass    = jQuery("#Pass").val();	
			
			if(Nome==''){
				alert('Nome esta em branco');
				$("#Nome").focus();
				return false;
					
			}else if (!isNaN(Nome)){
						
					alert('Numero nao eh premitido');
					$("#Nome").focus();
					return false;
							
			}else if(Bairro == ''){
				
				alert('Bairro em branco');
				$("#Bairro").focus();
				return false;
				
			}else if (Cidade ==''){
				
				alert("Cidade em branco");
				$("#Cidade").focus();
				return false;
				
			}else if(!regex_email.test(Email)){
						
					alert('Email invalido');
					$("#Email").focus();
					return false;
						
				}else if(isNaN(Fixo) && Fixo!='' && Fixo!=null){
						
					alert('Campo de telefone residencial letras nao sao premitidas');
					$("#Fixo").focus();
					return false;
						
				}else if(!regex_fixo.test(Fixo)&& !isNaN(Fixo)){
					
					alert('Telefone residencial invalido');
					$("#Fixo").focus();
					return false;
				
				}else if(isNaN(Celular) && Celular !='' && Celular != null ){
					
					alert('Campo do celular nao aceita letras');
					$("#Celular").focus();
					return false;
						
				}else if(!regex_celular.test(Celular) && !isNaN(Fixo)){
					
					alert('Celular invalido');
					$("#Celular").focus();
					return false;
						
				}else if(Senha ==''){
				
					alert('Senhas esta em branco.');
					$("#Senha").focus();
					return false;
					 
				}else if(Senha.length<5){
					
					alert('Senha menor que 6 Caracteres');
					$("#Senha").focus();
					return false;
					
				}else if(Pass==''){
					
					alert('Confirmacao de senha esta em branco.');
					$("#Pass").focus();
					return false;

				}else if(Senha != Pass){	
					alert('Senhas nao sao iguais');
					$("#Pass").focus();
					return false;
				}
		});	
});