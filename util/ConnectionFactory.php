<?php
@define (SEVERNAME ,'localhost');
@define (USERNAME ,'root');
@define (PASSWORD ,'');
@define (DBNAME , 'faleconosco');

// Create connection
$conn = mysqli_connect(SEVERNAME, USERNAME,PASSWORD) or die(mysqli_error($conn));        

//selecionando o banco de dados
$DB =  mysqli_select_db($conn, DBNAME) or die(mysqli_error($conn));