<?php session_start(); 
$_SESSION['page']='students.php';
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
           الرقم الجامعي
        </th>
        <th>
            البريد الإلكتروني
        </th>
                <th>
                    التخصص
                </th>
                               
                                <th>
                                    عدد الساعات المكتملة
                                </th>
                                <th>
                                    المرشدة الأكاديمية
                                </th>
</tr>
<tr>
<td>ابتهال حمد المطيري</td>
<td>442202323</td>
<td class="stu_email">442202323@students.ksu.edu.sa</td>
<td>تقنية المعلومات</td>
<td>90</td>
<td>عبير الدريس</td>
</tr>


<tr>
    <td>أمل أحمد</td>
    <td>440000000</td>
    <td class="stu_email">400000000@students.ksu.edu.sa</td>
    <td>هندسة برمجيات</td>
    <td>90</td>
    <td>عبير الدريس</td>
</tr>


              </table>




            </div>
        </div>
<?php
include('nav.php');
?>


    </div>
</body>


</html>