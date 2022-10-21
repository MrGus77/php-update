<?php 
include "config.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
   $sql = "DELETE FROM `cliente`.`usuarios` WHERE `id` = '$id'";

   $result = $conn->query($sql);
   if($result==TRUE){
    echo "registro deletado com sucesso!";
   }else{
    echo "erro:".$sql. "<br>" . $conn->error;
   }
}
?>