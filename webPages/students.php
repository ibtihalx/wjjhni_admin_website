<?php session_start();
$_SESSION['page'] = 'students.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
require '../vendor/autoload.php';

use webPages\models\Firestore;

$f = new Firestore();

$collection = $f->setCollectionName('students');
$students = $collection->getAllDocuments();

$collection1 = $f->setCollectionName('academic_advisors');
$advisors = $collection->getAllDocuments();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title>عرض الطالبات </title>
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
                            رقم الجوال
                        </th>
                        <th>
                            المرشدة الأكاديمية
                        </th>
                    </tr>




                    <?php
                    //get all student info
                    foreach ($students as $student) {
                        echo '<tr>';
                        echo '<td>' . $student['name'] . "</td>";
                        echo '<td>' . $student['id'] . "</td>";
                        echo '<td class="stu_email">' . $student['email'] . "</td>";
                        echo '<td>' . $student['major'] . "</td>";
                        echo '<td>' . $student['phone'] . "</td>";
                        $adv="";
                        foreach ($advisors as $advisor){
                            if($student["AdvisorUID"]== $advisor["uid"]){
                                $adv = $advisor["name"];
                            } 
                        }
                        echo '<td>' .$adv. "</td>";
                        echo "</tr>";
                    }
                    ?>




                </table>




            </div>
        </div>
        <?php
        include('nav.php');
        ?>


    </div>
</body>


</html>