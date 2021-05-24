<?php 
  require "./db.php";  
$tort = $_GET['title'];

    $ID =  $mysql -> query("SELECT `id` FROM `list_of_goods` WHERE `Name` = '$tort'");
    $ID = mysqli_fetch_assoc($ID);
    $ID = $ID['id'];
    $mysql->query("INSERT INTO `trash` (`id`) VALUES ('$ID')");
    $type =  $mysql -> query("SELECT `Type` FROM `list_of_goods` WHERE `Name` = '$tort'");
    $type = mysqli_fetch_assoc($type);
    $type = $type['Type'];
    if ($type == "торт")
    header('Location: TN.php');
    else if ($type == "пирог")
        header('Location: Пироги.php');
    else
        header('Location: Пирожное.php');
?>