<?php session_start();
$_SESSION['page'] = 'ratingView.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
        require '../vendor/autoload.php';

        use webPages\models\Firestore;
        // create object of firestore 
        $f = new Firestore();
        $collection = $f->setCollectionName('academic_advisors');
        //retrive all advisors documents
        $advisors = $collection->getAlldocumentsOrdered("department");
       $db_rating= new Firestore();
$collection2 = $db_rating->setCollectionName('ratings');

// $rates=$db_rating->getAdvisorRatingsDataByDocumentId("Rcsju1juO7TyPENB3cClsHTiNzW2");
        // print_r(count($rates));



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
    <script>
        $(document).ready(function() {





            function checkStatus() {
                var status = 1;
                $.ajax({
                    url: 'checkActive.php',
                    type: 'POST',
                    data: {
                        check: status
                    },
                    success: function(response) {
                        if (response == true) {
                            $('#btn_active').prop("disabled", true);
                            $('#btn_notActive').prop("disabled", false);
                            $("#act_text").html("فترة التقييم مفعلة الآن");
                        } else {
                            $('#btn_notActive').prop("disabled", true);
                            $('#btn_active').prop("disabled", false);
                            $("#act_text").html("فترة التقييم غير مفعلة الآن");
                        }
                    }
                });
            }
            // checkStatus();

            function updateStatus(status) {

                $.ajax({
                    url: 'checkActive.php',
                    type: 'POST',
                    data: {
                        update: status
                    },
                    success: function(response) {
                        if (response == true) {
                            $('#btn_active').prop("disabled", true);
                            $('#btn_notActive').prop("disabled", false);
                            $("#act_text").html("فترة التقييم مفعلة الآن");
                        } else {
                            $('#btn_notActive').prop("disabled", true);
                            $('#btn_active').prop("disabled", false);
                            $("#act_text").html("فترة التقييم غير مفعلة الآن");
                        }
                    }
                });
            }

            $("#btn_active").click(function() {
                updateStatus(true);
            });
            $("#btn_notActive").click(function() {
                updateStatus(false);
            });


        });
    </script>

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title> تقييم المرشدات</title>
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
            <div id="rating_activation">
                <button id="btn_active">تفعيل فترة التقييم</button>&nbsp; &nbsp;&nbsp;&nbsp;
                <button id="btn_notActive">إلغاء تفعيل فترة التقييم</button>
                <br><br>
                <h3 id="act_text">فترة التقييم مفعلة الآن</h3>
            </div>

            <div class="continer">

                <table>
                    <tr>
                        <th>اسم المرشدة</th>
                        <th>عدد المقيمات</th>
                        <th>تقييم الدعم والتوجيه</th>
                        <th> تقييم الإلمام بالأنظمة ولوائح الجامعة</th>
                        <th> تقييم التواجد وسرعة الرد</th>
                        <th>ملاحظات الطالبات</th>
                    </tr>
                   
                 <?php 
                 foreach($advisors as $adv){
                        $rates = $db_rating->getAdvisorRatingsDataByDocumentId($adv['uid']);
                   if(empty($rates)){
                            echo " <tr> <td>" . $adv['name'] . "</td>";
                            echo "<td>0</td><td>-</td><td>-</td><td>-</td>";
                            echo "<td> لايوجد"."</td>";
                            echo"</tr>";
                          
                   }
else {
                            echo " <tr> <td>" . $adv['name'] . "</td>";
                            echo "<td>".count($rates)."</td>";
                            echo "<td></td><td></td><td></td>";
                            echo " <td><button class='view_notes_btn' disabled>عرض الملاحظات </button></td>";
                            echo"</tr>";
}



                      

                 }
                 ?>

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