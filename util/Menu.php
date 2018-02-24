<?php

if (isset($_SESSION['use'])){
	if ($_SESSION['use']['nivel']==1){
?>


<div id="menuHeader">
	<ul>
		
        <?php 
			$query= "SELECT * FROM menu_cliente_vip ";
			$menu=mysqli_query($conn,$query) or die(mysqli_error($query));
			if (mysqli_num_rows($menu)>0){
				
				while($links=mysqli_fetch_array($menu)){
					
					echo html_entity_decode("<li><a href=".$links['Caminho']." title='".$links['title']."'>".$links['rotulo']."</a></li>");
						
				}
			}
		 
		 ?>
       
	</ul>
</div>
   <div id="Exibindo_email"><?php echo $_SESSION['use']['email']; ?></div>

<?php
}else if(isset($_SESSION['use']['nivel'])==3) {
	
?>
<div id="menuHeader">
	<ul>
		
        <?php 
			$query= "SELECT * FROM menu_funcionario";
			$menu=mysqli_query($conn,$query) or die(mysqli_error($query));
			if (mysqli_num_rows($menu)>0){
				
				while($links=mysqli_fetch_array($menu)){
										echo html_entity_decode("<li><a href=".$links['Caminho']." title='".$links['title']."'>".$links['rotulo']."</a></li>");
						
				}
			}
		 
		 ?>
       
	</ul>
</div>
   <div id="Exibindo_email"><?php echo $_SESSION['use']['id'];?></div>

<?php	
 }else{
	 
		header("Location: index.php"); 
	}
}else{
?>
<div id="menuHeader">
	<ul>
		    <?php 
			$query= "SELECT * FROM menu_padrao where 1";
			$menu=mysqli_query($conn,$query) or die(mysqli_error($query));
			if (mysqli_num_rows($menu)>0){
				
				while($links=mysqli_fetch_array($menu)){
					
					echo html_entity_decode("<li><a href=".$links['Caminho']." title='".$links['title']."'>".$links['rotulo']."</a></li>");
						
				}
			}
		 
		 ?>
	</ul>
</div>
<?php
}
?>