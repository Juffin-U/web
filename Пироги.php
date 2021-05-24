<?php session_start();
     
    require "./db.php";  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Nicaea </title>
        <link rel="stylesheet" href="assets\css\style.css" type="text/css">
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
            <div class="Prod_cont_p">
                <div class="Prod_info_p">
                    <div class="Prod_image"><img class="Prod_Img_p" src = "assets\img\Pirog.jpg" /></div>
                    <div class="Prod_text"><p class="Prod_p">Заказывая пирог у нас, вы можете точно знать, что вы получите свежий, румяный и вкусный пирог из продуктов высочайшего качества. Наш фирменный рецепт теста даёт неповторимый вкус, а внешний вид наших пирогов красив и аккуратен.</p></div>
                </div>
                <div class="Pord_exmp_cont">
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\pirog1.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Пирог с жимолостью 200р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Пирог с жимолостью">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Утонченный классический десерт приготовлен по особой технологии на основе песочного полуфабриката и нежной сырно-творожной начинки. Декорирован джемом из жимолости и арахисовыми лепестками.
                        </div>
                    </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\pirog2.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Пирог с клубникой 300р.</div>
                            <div class="Button_Image_cont_p">
                                 <a href="insert.php?title=Пирог с клубникой">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Утончённый классический десерт приготовлен по особой технологии на основе песочного полуфабриката и нежной сырно-творожной начинки. Декорирован джемом из клубники и арахисовыми лепестками.
                             </div>
                        </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\pirog3.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Пирог с черникой 250р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Пирог с черникой"></a>
                            <input type="submit" value="Купить" />
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Утонченный классический десерт приготовлен по особой технологии на основе песочного полуфабриката и нежной сырно-творожной начинки. Декорирован черничным джемом и арахисовыми лепестками.
                             </div>
                        </div>
                    </div>
                <div class="Pord_exmp_cont">
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\pirog4.jpg" /></div>
                            <div class="Buy_cont">
                                
                            <div class="Name_Image_cont_p">Пирог Невский 225р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Пирог Невский">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Изделие из сдобного теста пропитано сиропом, прослоено сливочным кремом и посыпано сахарной пудрой.
                        </div>
                    </div>
                    </div>       
                </div>
                 <div class="Podval"><div class="Podwal_info">  Наш адрес: 141255<br> Россия, Московская область, Пушкинский район, шоссе Братовщина-Ельдигино <br> Телефон: 8 (499) 340-94-82 </div>     
            </div>
            </div>
