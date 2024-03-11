<?php session_start();
$_SESSION['page'] = 'ratingView.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".students_notes").hide();
            $("#closing_btn").click(function() {
                $(".students_notes").hide();

            });
            $(".view_notes_btn").click(function() {
                $(".students_notes").show();
            });

        });
    </script>

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title> المواعيد المهمة</title>
</head>


<body>
    <header>
        <img src="images/logo.png" alt="logo">
        <h1 class="title"> وجّهني نظام الإرشاد الأكاديمي </h1>
        <button id="logout" onclick="window.location.href = 'logout.php';">تسجيل الخروج
            <span><img src="images/logout.svg"></span></button>
    </header>


    <div class="bg-continer">


        <div class="warper">

            <h1> تقييم المرشدات</h1>
            <br>

            <div class="continer">
                <table>
                    <tr>
                        <th>اسم المرشدة</th>
                        <th>التقييم</th>
                        <th>عدد المقيمات</th>
                        <th>تاريخ آخر تقييم</th>
                        <th>ملاحظات الطالبات</th>
                    </tr>
                    <tr>
                        <td>سارة أحمد ناصر</td>

                        <td> <span>4/5</span><br><span class="empty_star">&starf;</span><span class="full_star">&starf;&starf;&starf;&starf;</span>
                        </td>
                        <td>21 تقييم</td>
                        <td>2024-8-12</td>

                        <td><button class="view_notes_btn">عرض الملاحظات </button></td>

                    </tr>
                    <tr>
                        <td>سارة محمد علي</td>

                        <td> <span>5/5</span><br><span class="full_star">&starf;&starf;&starf;&starf;&starf;</span>
                        </td>
                        <td>10 تقييم</td>
                        <td>2024-2-13</td>

                        <td><button class="view_notes_btn">عرض الملاحظات </button></td>

                    </tr>


                </table>
                <div class="students_notes">
                    <button id="closing_btn" onclick="close()">&#10006;</button>
                    <h3>ملاحظات عن المرشدة</h3>
                    <h4>سارة أحمد ناصر</h4>
                    <br>
                    <div class="stu_note">
                        <p>التاريخ:
                            2024-8-12
                        </p>
                        <br>
                        <p>
                            مشرفة ممتازة وتضع حلول للخطط
                        </p>
                    </div>
                    <br>
                    <div class="stu_note">
                        <p>التاريخ:
                            2024-8-12
                        </p>
                        <br>
                        <p>
                            مشرفة ممتازة وتضع حلول للخطط
                        </p>
                    </div>
                    <br>
                    <div class="stu_note">
                        <p>التاريخ:
                            2024-8-12
                        </p>
                        <br>
                        <p>
                            مشرفة ممتازة وتضع حلول للخطط
                        </p>
                    </div>
                    <br>

                </div>



            </div>


        </div>

        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>