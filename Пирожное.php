<?php session_start();
     
    require "./db.php";  
?>
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
                    <div class="Prod_image"><img class="Prod_Img_p" src = "assets\img\Piroj.jpg" /></div>
                    <div class="Prod_text"><p class="Prod_p">Пирожное, которое мы продаём, очень известное в нашем как одни из самых лучших и желанных лакомств. Большинство рецептов бережно сохранены со времён СССР и готовятся по заветам кондитеров того времени. Наши пирожные отлично подходят для детского стола и для праздничного в качестве оригинального десерта.</p></div>
                </div>
                <div class="Pord_exmp_cont">
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\Piroj1.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Картошка Медовая в глазури 20р.</div>
                            <div class="Button_Image_cont_p">
                                 <a href="insert.php?title=Картошка Медовая">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Пирожное из бисквитной медовой массы с кремом каприз, покрытая глазурью.
                        </div>
                    </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\Piroj2.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Трубочка вафельная с кремом Каприз 30р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Трубочка вафельная">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Вафельная трубочка с начинкой  из крема Каприз.
                             </div>
                        </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\Piroj3.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Корзиночка Взбитые сливки Тирамису 25р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Корзиночка Тирамису">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Корзиночка из песочного теста наполнена сливочным кремом с добавлением кофе, декорирована взбитыми сливками со вкусом "Тирамису", посыпана  шоколадной сахарной пудрой.
                             </div>
                        </div>
                    </div>
                <div class="Pord_exmp_cont">
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\Piroj4.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Корзиночка восточная 22р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Корзиночка восточная">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Корзиночка из песочного теста наполнена начинкой из чернослива, грецкого ореха и мёда.
                        </div>
                    </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\Piroj5.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Корзиночка Ореховая 60р.</div>
                            <div class="Button_Image_cont_p">
                                 <a href="insert.php?title=Корзиночка Ореховая">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Корзиночка из песочного теста наполнена начинкой из арахисовых лепестков и мёда.
                             </div>
                        </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\Piroj6.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Эклер с кремом Дамские пальчики 35р.</div>
                            <div class="Button_Image_cont_p">
                                 <a href="insert.php?title=Эклер с кремом">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Заварные палочки наполнены взбитыми сливками со сгущенным молоком, оформлены кондитерской глазурью.
                             </div>
                        </div>
                    </div>        
                </div>
 <div class="Podval"><div class="Podwal_info">  Наш адрес: 141255<br> Россия, Московская область, Пушкинский район, шоссе Братовщина-Ельдигино <br> Телефон: 8 (499) 340-94-82 </div>     
            </div>
