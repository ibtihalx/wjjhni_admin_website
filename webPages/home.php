<?php

session_start();
$_SESSION['page'] = 'home.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title>الصفحة الرئيسية </title>
</head>


<body>

    <header>
        <img src="images/logo.png" alt="logo">
        <h1 class="title"> وجّهني نظام الإرشاد الأكاديمي </h1>
        <button id="logout" onclick="window.location.href = 'logout.php';">تسجيل الخروج
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
                    <button class="btn_card" onclick="location.href= 'addAdvisors.php'">أضف </button><br>
                    <button class="btn_card" onclick="location.href= 'advisors.php'">عرض </button>
                </div>


                <div class="box">
                    <div><img src="images/plan-svgrepo-com.svg"></div>

                    <h2> الخطط الدراسية</h2>
                    <br>
                    <button class="btn_card" onclick="location.href= 'plans.php'">تعديل </button><br>

                </div>


                <div class="box">
                    <div><img src="images/assignee-svgrepo-com.svg"></div>

                    <h2>إسناد الطالبات</h2>
                    <br>
                    <button class="btn_card" onclick="location.href= 'studentsAssignment.php'">إسناد </button><br>
                </div>

                <div class="box">
                    <div><img src="images/important-dates-svgrepo-com.svg"></div>

                    <h2> المواعيد المهمة</h2>
                    <br>
                    <button class="btn_card" onclick="location.href= 'importantDates.php'">أضف </button><br>
                    <button class="btn_card" onclick="location.href= 'importantDates.php'">حذف </button><br>
                </div>


                <div class="box">
                    <div><img src="images/delete-profile-svgrepo-com.svg"></div>

                    <h2> حذف المستخدمين</h2>
                    <br>
                    <button class="btn_card" onclick="location.href= 'studentsDelete.php'">حذف الطالبات </button><br>
                    <button class="btn_card" onclick="location.href= 'advisorsDelete.php'">حذف المرشدات </button><br>
                </div>


                <div class="box">
                    <div><img src="images/google-forms-svgrepo-com.svg"></div>

                    <h2>النماذج الأكاديمية</h2>
                    <br>
                    <button class="btn_card" onclick="location.href= 'academicForms.php'">أضف</button><br>
                    <button class="btn_card" onclick="location.href= 'academicForms.php'">حذف</button><br>
                </div>
                <div class="box">
                    <div><img src="images/rating-rate-svgrepo-com.svg"></div>

                    <h2>تقييم المرشدات</h2>
                    <br>
                    <button class="btn_card" onclick="location.href= 'ratingView.php'">عرض</button><br>

                </div>






            </div>
        </div>

        <?php

        include("nav.php");
        ?>


    </div>
</body>


</html>