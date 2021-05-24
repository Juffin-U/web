<?php
    require "./db.php";  
    $count_of_goods[18];
    $names[18];
    $itog = 0;
    for($i = 1; $i < 20; $i++){
    $result=$mysql ->query("SELECT count(*) as total FROM trash  WHERE `id` = '$i'");
    $t1=$result->fetch_row();
    $t1 = $t1[0];
    $count_of_goods[$i] = $t1;
    $result=$mysql ->query("SELECT `Name` FROM `list_of_goods`  WHERE `id` = '$i'");
    $name=mysqli_fetch_assoc($result);
    $name = $name['Name'];
    $names[$i] = $name;
    
    
    }
    echo $cost;
   
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <title> Nicaea </title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body>
        <header>
            
                <div class="button_cont">
                    <div class="top_button_1"> <a href ="Главная.HTML"><p class="top_button_text">Главная</p></a> </div>
                    <form class="f_search"><input class="search" type ="text" placeholder="Поиск" ></form>
                    <div class="top_button_1"> <a href ="Корзина.php"><p class="top_button_text">Корзина</p></a> </div>
                    <div class="top_button_1"> <a href ="Обратная связь.HTML"><p class="top_button_text">Обратная связь</p></a> </div>
                </div>
            
        </header>
         <div class="Prod_Reep">
             <div class="Tmc">
             <div class="Shop_case">
                 <div class="Shop_case_info_cont">
                     <div class="Shop_case_info">Название</div>
                     <div class="Shop_case_info">
                        Колличество
                     </div>
                     <div class="Shop_case_info">Цена</div>
                 </div>
                    <?php
                    
                    for ($i=1; $i < 20; $i++)
                       
                   {
                        if($count_of_goods[$i] != 0){
                 ?>
                <div class="Shop_case_info_cont">
                     <div class="Shop_case_info"><?php echo $names[$i]; ?></div>
                     <div class="Shop_case_info"><?php echo $count_of_goods[$i]; ?></div>
                     <div class="Shop_case_info"><?php     
                    $result=$mysql ->query("SELECT `Cost` FROM `list_of_goods`  WHERE `id` = '$i'");
                    $cost=mysqli_fetch_assoc($result);
                    $cost = $cost['Cost']; 
                    $cost = $cost * $count_of_goods[$i];
                    $itog = $itog + $cost;
                    echo $cost;
                         ?></div>
                 </div>
                    <?php 
                        }
                        } ?>
                 <div class="Shop_case_info_cont">
                     <div class="Shop_case_info"></div>
                     <div class="Shop_case_info">Общая стоимость:
                     <?php echo $itog; ?>
                     </div>
                     <form action="remove.php" method="post">
                     <div class="Shop_case_info"><a><input type="submit" value="Подтвердить покупку"></a></div>
                     </form>
                 </div>
                 </div>
                  </div>
        </div>
        <div class="Podval"><div class="Podwal_info">  Наш адрес: 141255<br> Россия, Московская область, Пушкинский район, шоссе Братовщина-Ельдигино <br> Телефон: 8 (499) 340-94-82 </div>     