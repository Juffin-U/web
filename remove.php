<?php 
  require "./db.php";  
$mysql -> query("DELETE FROM `trash`");
 header('Location: Корзина.php');
?>