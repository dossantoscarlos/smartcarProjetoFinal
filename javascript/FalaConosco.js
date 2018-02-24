/*Script para a validacao de formulario em jQuery*/
jQuery(document).ready( function(){

    jQuery("#Form_POST").submit(function (){
        
        var regex_email    =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
       	var regex_telefone =/^([1-9])+([0-9])([9]{1})+([2-9]{4})+([0-9]{4})$/;
        var Nome      = jQuery("#Nome").val();
        var Email     = jQuery("#Email").val();
        var Telefone  = jQuery("#Telefone").val();
        var Endereco  = jQuery("#Endereco").val();
        var Menssagem = jQuery("#Mensagem").val();
        var Cidade    = jQuery("#Cidade").val();
        var Bairro    = jQuery("#Bairro").val();
        
        if(Nome==='' ){	
            alert('Nome esta vazio');
            $("#Nome").focus();
            return false;

        }else if(!isNaN(Nome)){

            alert('Numero nao eh permitido no nome');
            $("#Nome").focus();
            return false;

        }else if(Email===''){

            alert('Email Em branco');
            $("#Email").focus();
            return false;

        }else if(!regex_email.test(Email)){
        
            alert('Email invalido');
            $("#Email").focus();
            return false;

        }else if (Telefone===''){
            alert('Televone Em branco');
            $("#Telefone").focus();
            return false;

        }else if (isNaN(Telefone)){

            alert ('Nao é permitido letras');
            $("#Telefone").focus();
            return false;

        }else if (!regex_telefone.test(Telefone)){

            alert ('Telefone nao eh valido' + Telefone);
            $("#Telefone").focus();
            return  false;

        }else if(Bairro ===''){

            alert('Bairro esta em branco');
            $("#Bairro").focus();
            return false;	
          
        }else if(Cidade ===''){
            
            alert('Cidade esta em branco');
            $("#Cidade").focus();
            return false;	
            
        }else if(Endereco ===''){
            alert('Endereco esta em branco');
            Endereco.focus();
            return false;
        
        }else if (Menssagem===''){

            alert('Messagem esta em branco');
            $("#Mensagem").focus();
            return false;	

        }else if (Menssagem.length >254 || Menssagem.length<20){

            alert('Mensagem exedeu o limite ou mensagem muito pequena');
            $("#Mensagem").focus();
            return false;	

        }
    });		
	
});	


