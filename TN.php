<?php session_start();
     
    require "./db.php";  
?>


<!DOCTYPE html>
<html>
    <head>
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
                    <div class="Prod_image"><img class="Prod_Img_p" src = "assets\img\tortik.jpg" /></div>
                    <div class="Prod_text"><p class="Prod_p">Нежные, сочные тортики с изумительными кремами. Их нежный вкус, мягкость бисквита и незабываемое сочетанием ингредиентов делают компанию "Никея" хедлайнером среди прочих кондитерских компаний. Сладкая выпечка на сметане, рецепты из простых ингредиентов - то, что нужно для вечернего чаепития.</p></div>
                </div>
                <div class="Pord_exmp_cont">
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik1.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт «К ЧАЮ» 200р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=К ЧАЮ"> <input type="submit" value="Купить"/> </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Коржи из рубленого теста прослоены начинкой «Варёная сгущенка». Торт обсыпан крошкой из того же теста и декорирован печеньем «Орешки» с начинкой «Варёная сгущенка» и грецкими орехами.
                        </div>
                    </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik2.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт Ореховое кольцо 300р.</div>
                            <div class="Button_Image_cont_p">
                               
                                <a href="insert.php?title=Ореховое кольцо"> <input type="submit" value="Купить" /></a>
                                
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Кусочки медовых коржей пропитаны сиропом и кремом Каприз. Торт сформирован в виде кольца, оформлен кондитерской глазурью, сливочным кремом  и обжаренными лепестками арахиса.
                             </div>
                        </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik3.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт ГРУШЕВЫЙ 250р.</div>
                            <div class="Button_Image_cont_p">
                               <a href="insert.php?title=ГРУШЕВЫЙ">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Бисквит на натуральном бельгийском какао пропитан сиропом, прослоен грушевой начинкой с кусочками груши и кремом на основе животных сливок. Торт обсыпан крошкой из шоколадного бисквита, декорирован итальянским шоколадным покрытием и грушами из желе.
                             </div>
                        </div>
                    </div>
                <div class="Pord_exmp_cont">
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik4.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт Дамский каприз 225р.</div>
                            <div class="Button_Image_cont_p">
                            <a href="insert.php?title=Дамский каприз">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Заварные шарики обильно пропитаны сметанным кремом. Торт декорирован профитролями, сделанными из заварного теста и облитыми карамельным гелем.
                        </div>
                    </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik5.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт Чёрный принц 600р.</div>
                            <div class="Button_Image_cont_p">
                             <a href="insert.php?title=Чёрный принц">
                            <input type="submit" value="Купить" />
                            </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Бисквит на натуральном бельгийском какао пропитан коньячным сиропом. Торт прослоен солёной карамелью с жареными лепестками арахиса и кремом из взбитых молочных сливок, обсыпан обжаренными лепестками арахиса, декорирован солёной карамелью.
                             </div>
                        </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik6.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт Блинный с клубникой 350р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Блинный с клубникой"></a>
                            <input type="submit" value="Купить" />
                                
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Множество тонких французских блинчиков прослоены нежнейшим сметанным кремом и клубничным джемом.
                             </div>
                        </div>
                    </div>
                <div class="Pord_exmp_cont">
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik7.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт Блинный Шоколадный 280р.</div>
                            <div class="Button_Image_cont_p">
                                <a href="insert.php?title=Блинный Шоколадный">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Шоколадные блинчики щедро прослоены кремом из шоколадно-ореховой начинки и сливок. Торт оформлен сливочно-шоколадным кремом и декором из кондитерской глазури.
                        </div>
                    </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik8.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">торт Домашний 150р.</div>
                            <div class="Button_Image_cont_p">
                            <a href="insert.php?title=Домашний">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Тонкие коржи из рубленого теста прослоены нежным сливочно-заварным кремом. Торт посыпан крошкой, оформлен сливочным кремом и кондитерской глазурью.
                             </div>
                        </div>
                    <div class="Segment">
                        <div class="Left_cont_p">
                            <div class="Image_cont_p"><img class="Prod_Img_p" src = "assets\img\tortik9.jpg" /></div>
                            <div class="Buy_cont">
                            <div class="Name_Image_cont_p">Торт Малиновый 250р.</div>
                            <div class="Button_Image_cont_p">
                               <a href="insert.php?title=Малиновый">
                            <input type="submit" value="Купить" />
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="Right_cont_p">
                            Описание: <br>
                            Шоколадный бисквит, приготовленный на бельгийском какао и пропитанный малиновым сиропом, прослоен нежным муссом на основе свежей малины. Торт оформлен шоколадным покрытием и декором из цветной глазури и желе.
                             </div>
                        </div>
                    </div>
                </div>
             <div class="Podval"><div class="Podwal_info">  Наш адрес: 141255<br> Россия, Московская область, Пушкинский район, шоссе Братовщина-Ельдигино <br> Телефон: 8 (499) 340-94-82 </div>     
            </div>
        </div>