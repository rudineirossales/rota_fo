<?php
 
include "coon.php";
 
$anuf = $_POST['anuf'];
 
$sql = "SELECT * FROM rota WHERE anuf = '$anuf' order by trecho";
$qr = mysql_query($sql) or die(mysql_error());
 
if(mysql_num_rows($qr) == 0){
   echo  '<option value="0">'.htmlentities('Não há rotas').'</option>';
    
}else{
   while($ln = mysql_fetch_assoc($qr)){
      echo '<option value="'.$ln['trecho'].'">'.$ln['trecho'].'</option>';
   };
}
 


?>