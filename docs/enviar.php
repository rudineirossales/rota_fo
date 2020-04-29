<?php  include "coon.php";  ?>










<!DOCTYPE html>
<html lang="pt-br">

<head>
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cadastro.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>ROTAS</title>


</head>



<body>








<?php



$anuf =$_POST['anuf'];
$trecho =$_POST['trecho']; 
$rota =$_POST['rota'];

$query = "insert into rota (anuf,trecho,rota)";

$query.= "values ('$anuf','$trecho','$rota')";















$sql = mysql_query($query);



if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('CADASTRADO COM SUCESSO!')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<script language='JavaScript'>
   window.alert('ERRO NO CADASTRO!');
   </script> " ;
  
}








?>

























</body>


</html>