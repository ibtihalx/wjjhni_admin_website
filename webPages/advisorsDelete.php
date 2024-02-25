<?php session_start();
$_SESSION['page'] = 'advisorsDelete.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
require '../vendor/autoload.php';


use webPages\models\Firestore;

$f = new Firestore();  
$collection = $f->setCollectionName('academic_advisors');
$advisors = $collection->getAlldocumentsOrdered("name");
?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".confim_delete").hide();

            $(".delte_btn").click(function() {
                $(".confim_delete").show();
                $('.del_page_div  > *:not(.confim_delete)').css("filter", "blur(2px)");
                $(".confim_delete").css("filter", "none");



            });

            $(".no_del_btn").click(function() {

                $('.del_page_div > *:not(.confim_delete)').css("filter", "none");

                $(".confim_delete").hide();
            });
        });
    </script>

    <link rel="stylesheet" type="text/css" href="shared.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>حذف الطالبات</title>
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

            <h1> حذف المرشدات الأكاديميات </h1>
            <br>

            <div class="continer">
                <div class="del_page_div">
                    <div class="delete_hint">
                        <h3 id="del_header">لحذف مرشدة أكاديمية يرجى اتباع الآتي:</h3>
                        <br>
                        <ul>
                            <li>اختيار المرشدات الأكاديميات المراد حذفهن من الجدول</li>
                            <li>الضغط على زر تأكيد الحذف</li>
                            <li>سيتم إسناد الطالبات التابعات للمرشدات المحذوفات إلى مرشدات أخريات</li>
                        </ul>
                    </div>
                    <table>
                        <tr>
                            <th>
                                اختيار
                            </th>
                            <th>
                                الاسم
                            </th>
                            
                            <th>
                                البريد الإلكتروني
                            </th>
                            <th>
                                القسم
                            </th>
                        </tr>




                        <?php
                        //get all student info
                        foreach ($advisors as $advisor) {
                            echo '<tr>';
                            echo "<td> <input type='checkbox' ></td>";
                            echo '<td>' . $advisor['name'] . "</td>";
                            echo '<td class="stu_email">' . $advisor['email'] . "</td>";
                            echo '<td>' . $advisor['department'] . "</td>";


                            echo "</tr>";
                        }
                        ?>




                    </table>

                    <button type="button" class="delte_btn" name="delete_stu"> <i class="fa fa-trash"></i> حذف </button>
                    <div class="confim_delete" id="conf">
                        <h4>هل أنت متأكد من الحذف؟</h4>
                        <br>
                        <button class="no_del_btn">لا</button>&nbsp;&nbsp;
                        <button class="yes_del_btn">نعم</button>

                    </div>
                </div>

            </div>
        </div>
        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>