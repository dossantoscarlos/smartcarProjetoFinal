<?php 
if((!isset($_GET['p'])=="login")&& (!isset($_GET['p'])=="cadastro") && (!isset($_GET['p'])=="faleconosco")&& (!isset($_GET['p'])=="servicos")){

?>
<style>
	.mascote{
		z-index:-1;
		float:right !important;
		width:190px;
		height:205px;
		margin-top:-23% !important;
		direction:rtl!important;
		margin-left:40%!important;
		
	}
	.mascote img{
		width:188px;
		height:202px;
	}

</style>
<?php
	
}elseif($_GET['p']=="login"){
?>
<style>
	.mascote{
		z-index:-1;
		float:right !important;
		width:190px;
		height:205px;
		margin-top:-2% !important;
		direction:rtl!important;
		margin-left:40%!important;	
	}
	.mascote img{
		width:188px;
		height:202px;
	}
</style>
<?php
} elseif($_GET['p']=="cadastro"){
?>
<style>
	.mascote{
		z-index:-1;
		float:right !important;
		width:190px;
		height:205px;
		margin-top:-7% !important;
		direction:rtl!important;
		margin-left:40%!important;	
	}
	.mascote img{
		width:188px;
		height:202px;
	}
</style>
<?php 
}elseif($_GET['p']=="faleconosco"){
?>
<style>
	.mascote{
		z-index:-1;
		float:right !important;
		width:400px;
		height:205px;
		margin-top:-23% !important;
		direction:rtl !important;
		margin-left:70% !important;
	}
	.mascote img{
		width:188px;
		height:202px;
	}
</style>
<?php
}elseif($_GET['p']=="servicos")
{
?>
<style>
	.mascote{
		z-index:-1;
		float:right !important;
		width:400px;
		height:205px;
		margin-top:-23% !important;
		direction:rtl !important;
		margin-left:70% !important;
	}
	.mascote img{
		width:188px;
		height:202px;
	}
</style>

<?php
}elseif (isset($_GET['p'])=="modelo"){
?>	
	<style>
	.mascote{
		z-index:-1;
		float:right !important;
		width:190px;
		height:205px;
		margin-top:-3% !important;
		direction:rtl!important;
		margin-left:40%!important;
		
	}
	.mascote img{
		width:188px;
		height:202px;
	}

</style>
<?php	
}else{
?>
    
<style>
	.mascote{
		z-index:-1;
		float:right !important;
		width:190px;
		height:205px;
		margin-top:11% !important;
		direction:rtl!important;
		margin-left:40%!important;
		
	}
	.mascote img{
		width:188px;
		height:202px;
	}

</style>
<?php
}
?>
