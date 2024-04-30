<?php session_start();
$_SESSION['page'] = 'students.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
require '../vendor/autoload.php';

use webPages\models\Firestore;

$f = new Firestore();

$collection = $f->setCollectionName('students');
$students = $collection->getAlldocumentsOrdered("id");

$collection1 = $f->setCollectionName('academic_advisors');
$advisors = $collection->getAlldocuments();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title>عرض الطالبات </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

    <header>
        <img src="images/logo.png" alt="logo">
        <h1 class="title"> وجّهني نظام الإرشاد الأكاديمي </h1>
        <button id="logout" onclick="window.location.href = 'logout.php';">تسجيل الخروج
            <span><img src="images/logout.svg"></span></button>
    </header>
    <script>
        function searchByID() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.querySelector(".continer table");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those that don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 corresponds to the student ID column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <div class="bg-continer">





        <div class="warper">

            <h1> عرض الطالبات</h1>
            <br>
            <div class="searchDiv" style="height: 50px; margin-left:30%; margin-bottom:16px;"><input type="text" id="searchInput" onkeyup="searchByID()" placeholder="بحث بالرقم الجامعي">&nbsp;<i class="fa fa-search" aria-hidden="true" style="color:#375E98;"></i></input></div>
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
                        $adv = "";
                        foreach ($advisors as $advisor) {
                            if ($student["AdvisorUID"] == $advisor["uid"]) {
                                $adv = $advisor["name"];
                            }
                        }
                        echo '<td>' . $adv . "</td>";
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