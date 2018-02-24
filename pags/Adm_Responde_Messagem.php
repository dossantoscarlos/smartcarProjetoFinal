<?php 

if(isset($_SESSION['use'])){
	
		$sql="SELECT * FROM post where 1 limit 20";
		$consulta=mysqli_connect($conn,$sql) or die(mysqli_error($conn));
			 
		if(mysqli_num_rows($consulta)>0){			
				
?>

		<div id='Lista_mensagem'>
			<input type='text' value='<?php $list['email']?>' disabled/>
        	<textarea disabled><?php $list['mensagem']; ?></textarea> 
		</div>  
    	<hr/>
        <div id='responder'>
    		<textarea>
        			
       		</textarea>
    	</div>
    
    
    
<?php
		}else {
		
			echo "<span>Nao possui mensagens";
		}
	
}
?>