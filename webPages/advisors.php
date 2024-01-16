<?php
session_start();
$_SESSION['page'] = 'advisors.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
require '../vendor/autoload.php';

use webPages\models\Firestore;
// create object of firestore 
$f = new Firestore();
$collection = $f->setCollectionName('academic_advisors');
//retrive all advisors documents
$advisors = $collection->getAllDocuments();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="shared.css">
    <title>المرشدات الأكاديميات</title>
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

            <h1> عرض المرشدات</h1>
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
                            رقم الجوال
                        </th>
                    </tr>

                    <!-- retrive from DB all advisors info -->
                    <?php
                    foreach ($advisors as $advisor) {
                        echo '<tr>';
                        echo '<td>' . $advisor['name'] . "</td>";
                        echo '<td calss="stu_email">' . $advisor['email'] . "</td>";
                        echo '<td>' . $advisor['department'] . "</td>";
                        echo '<td>' . $advisor['phone'] . "</td>";
                        echo '</tr>';
                    }


                    ?>



                </table>




            </div>
        </div>
        <?php
        include("nav.php");
        ?>


    </div>
</body>


</html>