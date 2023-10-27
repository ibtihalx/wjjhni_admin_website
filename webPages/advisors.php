
<?php
session_start();
$_SESSION['page']='advisors.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title>Add page</title>
</head>


<body>

    <header>
        <img src="images/logo.png" alt="logo">
        <button id="logout">تسجيل الخروج
            <span><img src="images/logout.svg"></span></button>
    </header>


    <div class="bg-continer">





        <div class="warper">

            <h1> عرض الطالبات</h1>
            <br>

            <div class="continer">
                <table>
                    <tr>
                        <th>
                            الاسم
                        </th>
                       
                        <th>
                            البريد الإلكتروني
                        </th>
                        <th>
                           القسم
                        </th>

                        <th>
                            الساعات المكتبية
                        </th>
                       
                    </tr>
                    <tr>
                        <td>مرشدة أكاديمية</td>
                      
                        <td class="stu_email">lorum@ksu.edu.sa</td>
                        <td>تقنية المعلومات</td>
                        <td>الاثنين 9-10
                            <br>
                            الثلاثاء12-1
                        </td>
                       
                    </tr>


                    <tr>
                        
                        <td>مرشدة أكاديمية</td>
                        <td class="stu_email">lourm@ksu.edu.sa</td>
                        <td>هندسة برمجيات</td>
                        <td>الأربعاء 11:30-12</td>
                     
                    </tr>


                </table>




            </div>
        </div>
 <?php
  include("nav.php");
  ?>


    </div>
</body>


</html>