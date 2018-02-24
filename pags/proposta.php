<?php
	if(isset($_SESSION['use']['nivel'])==4){

?>
<script src="util/imprimir.js"></script>
<style>
table{
	box-shadow:0 0 23px 0 #999;
	margin:0 auto;
		
	}

	th{
		width:200px;
		text-align:center;
		 border:3px solid #006;	
			
		}
	td{
		width:200px;
		text-align:center;
		border-right:3px solid #006; 	
		}
.div_table{
		margin-top:12px;
		margin-bottom:-10%;	
		}
input[type='button']{
		margin-left:50%;
		height:50px;
		margin-top:12px;
		width:100px;
	}
	
</style>
<div class="div_table">
<table>
	<thead>
		<th>Nome do cliente</th>
    	<th>CPF</th>
        <th>Celular</th>
    	<th>Email</th>
        <th>Endereco</th>
    	<th>RG</th>
    </thead>
  <?php
$select="Select * from smartcar.usuario ";$con=mysqli_query($conn,$select) or die (mysqli_error($conn));    	
while($row=mysqli_fetch_array($con))
{
echo "<tbody>
    	<td>".$row['nome']."</td>
        <td>".$row['email']."</td>
    	 <td>".$row['fixo']."</td>
          <td>".$row['celular']."</td>
    	  <td>".$row['cidade']."</td>
          <td>".$row['bairro']."</td>
		 </tbody>";
}

?>
<!--<tfoot style="text-align:center">
	<tt>SmartCar</tt>
</tfoot>  -->
</table>


<input type="Button" value="Imprimir" id="imprimir"/>

</div>
<?php
	}
?>