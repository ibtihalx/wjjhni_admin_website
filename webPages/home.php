<?php

session_start();
$_SESSION['page']='home.php';
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title>Home page</title>
</head>


<body>

    <header>
        <img src="images/logo.png" alt="logo">
   <button id="logout">تسجيل الخروج
    <span><img src="images/logout.svg"></span></button>

    </header>
<span></span>
   
    <div class="bg-continer">
        




        <div class="warper">

            <h1>الرئيسية</h1>


            <div class="continer">


                <div class="box">
                    <div><img src="images/students.svg"></div>
                    <h2> الطالبات </h2>
                    <br>
                    <button class="btn_card" onclick="location.href= 'addStudent.php'">أضف </button><br>
                    <button class="btn_card" onclick="location.href= 'students.php'">عرض </button>
                </div>

                <div class="box">
                    <div><img src="images/light.svg"></div>

                    <h2> المرشدات الأكاديميات</h2>
                    <br>
                    <button class="btn_card"   onclick="location.href= 'addAdvisors.php'">أضف </button><br>
                    <button class="btn_card"  onclick="location.href= 'advisors.php'">عرض </button>
                </div>


                <!-- 8888888888888888888888888888888 -->




            </div>
        </div>

        <?php
        
        include("nav.php");
        ?>
        

    </div>
</body>


</html>