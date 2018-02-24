<?php  
if(isset($_POST['Nome'])|| isset($_POST['Endereco'])|| isset($_POST['Bairro'])
                || isset($_POST['Mensagem'])||isset($_POST['Email']) || isset($_POST['Cidade'])
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
            $Email     = prepara(filter_input(INPUT_POST,"Email"));
            $Telefone  = prepara(filter_input(INPUT_POST,"Telefone"));
            $Cidade    = prepara(filter_input(INPUT_POST, "Cidade"));
            
            if (!empty($Nome)&& !empty($Endereco) && !empty($Bairro)&& !empty($Mensagem)
                    && !empty($Email) && !empty($Cidade) && !empty($Telefone)){
	
                if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/i",$Email)){
                    
                    
                    if(preg_match("/^([1-9])+([0-9])+([9]{1})+([0-9]{4})+([0-9]{4})$/",$Telefone)){
                        //sintaxe do banco 
                     
                    //cadrastra no banco de dados 
                        $sql="insert into post(nome,endereco,bairro,telefone,cidade,mensagem)";
                        $sql.="values('$Nome','$Endereco','$Bairro','$Telefone','$Cidade','$Mensagem')";
                        $cadastra = mysqli_query($conn,$sql) or die("<span Class='span_mensagem'>".mysqli_error($conn)."</span>");
                    //exibe uma mensagem de sucesso                
                        echo "<span Class='span_mensagem'>Cadrastrado Com Sucesso!!!</span>";                    
                     
                        
                        
                    }
                }else{      
                    echo "<span Class='span_mensagem'>erro no Email</span>";
                } 
            
           }else{
               echo "<span Class='span_mensagem'>O fomulario possui campos em branco</span>";
           }
            
}
?>