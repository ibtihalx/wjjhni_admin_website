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


$db_rating = new Firestore();
$collection2 = $db_rating->setCollectionName('ratings');

// create object of firestore 
$db_rate_check = new Firestore();
$col = $db_rate_check->setCollectionName("rating_activation");
$db_rate_check->setDocumentName("activationDocument");
$doc = $db_rate_check->getData();
$isActive = $doc['isActive'];

// $notes = array();

// $notes = array_fill_keys($notes, $one_adv);
// print_r($notes);



// $rates=$db_rating->getAdvisorRatingsDataByDocumentId("Rcsju1juO7TyPENB3cClsHTiNzW2");
// print_r(count($rates));

function printStars($rating)
{
    $fullStars = floor($rating); // Get the number of full stars
    $halfStar = ceil($rating) != $fullStars; // Check if there's a half star
    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0); // Calculate the number of empty stars

    // Print full stars
    for ($i = 0; $i < $fullStars; $i++) {
        echo "<span class='full_star'>&#9733;</span>"; // Unicode character for a star
    }

    // Print half star if exists
    if ($halfStar) {
        echo "<span class='full_star'>&#9734;</span>"; // Unicode character for a half star
    }

    // Print empty stars
    for (
        $i = 0;
        $i < $emptyStars;
        $i++
    ) {
        echo "<span class='empty_star'>&#9734;</span>"; // Unicode character for an empty star
    }
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
            // Event delegation for closing button
            $(document).on("click", "#closing_btn", function() {
                $(".students_notes").hide();
            });
            $(".view_notes_btn").click(function() {

                var notes = JSON.parse($(this).val());
                var adv_name = Object.keys(notes)[0]; // Extract the key
                $('#name_adv').text(adv_name);
                // Clear the contents of the .students_notes container
                $('.students_notes').empty();

                $('<button id="closing_btn">&#10006;</button>').appendTo(".students_notes");
                $('<h3> ملاحظات عن المرشدة </h3>').appendTo('.students_notes');
                $('<h4 id="name_adv">' + adv_name + '</h4>').appendTo('.students_notes ');

                // Iterate over each key-value pair in the JSON object
                Object.entries(notes[adv_name]).forEach(([key, value]) => {
                    // Create a new <div> element for each key-value pair
                    // $('<br>').appendTo('.students_notes');
                    var divElement = $('<div>').addClass('stu_note');
                    $('<br>').appendTo('.students_notes');
                    // Create and append <p> elements for the date and note content
                    var dateElement = $('<p>').text(value + ' :التاريخ ').appendTo(divElement);
                    $('<br>').appendTo(divElement);
                    var noteElement = $('<p>').text(key).appendTo(divElement);

                    // Append the new <div> element to the ".students_notes" container
                    $('.students_notes').append(divElement);
                });

                $(".students_notes").show();
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            function updateStatus(status) {

                $.ajax({
                    url: 'checkActive.php',
                    type: 'POST',
                    data: {
                        update: status
                    },
                    success: function(response) {
                        response = response.trim().toLowerCase();
                        if (response === "true") {
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
                updateStatus("true");
            });
            $("#btn_notActive").click(function() {
                updateStatus("false");
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
                <?php
                if (strcmp($isActive, "true") == 0) {
                    echo '<button id="btn_active" disabled>تفعيل فترة التقييم</button>&nbsp; &nbsp;&nbsp;&nbsp;';
                    echo "   <button id='btn_notActive'>إلغاء تفعيل فترة التقييم</button>";
                    echo " <br><br>";
                    echo " <h3 id='act_text'>فترة التقييم مفعلة الآن</h3> ";
                } else {
                    echo '<button id="btn_active" >تفعيل فترة التقييم</button>&nbsp; &nbsp;&nbsp;&nbsp;';
                    echo "   <button id='btn_notActive' disabled>إلغاء تفعيل فترة التقييم</button>";
                    echo " <br><br>";
                    echo " <h3 id='act_text'>فترة التقييم غير مفعلة الآن</h3> ";
                }



                ?>
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
                    foreach ($advisors as $adv) {
                        $support_direct_rate = 0;
                        $attent_fast_resp = 0;
                        $rules_know = 0;


                        $rates = $db_rating->getAdvisorRatingsDataByDocumentId($adv['uid']);
                        if (empty($rates)) {
                            echo " <tr> <td>" . $adv['name'] . "</td>";
                            echo "<td>0</td><td>-</td><td>-</td><td>-</td>";
                            echo "<td> لايوجد" . "</td>";
                            echo "</tr>";
                        } else {

                            $numberOfRatings = count($rates);
                            echo " <tr> <td>" . $adv['name'] . "</td>";
                            echo "<td>" . $numberOfRatings . "</td>";
                            $notes = array();
                            $comments = array();
                            foreach ($rates as $rate) {
                                $support_direct_rate += $rate['support_direct_rate'];
                                $attent_fast_resp += $rate['attent_fast_resp'];
                                $rules_know += $rate['rules_know'];
                                if ($rate['studentComment'] != "") {
                                    $comments[$rate['studentComment']] = $rate['addedDate'];
                                }
                                $notes = array($adv['name'] => $comments);
                            }
                            // Calculate average ratings
                            $support_direct_rate = $support_direct_rate / $numberOfRatings;
                            $attent_fast_resp = $attent_fast_resp / $numberOfRatings;
                            $rules_know = $rules_know / $numberOfRatings;

                            echo "<td>";
                            echo "<span>" . number_format((float)$support_direct_rate, 2, '.', '') . "/5</span><br>";
                            printStars($support_direct_rate);
                            echo "</td>";
                            echo "<td>";
                            echo "<span>"
                                . number_format((float)$attent_fast_resp, 2, '.', '') . "/5</span><br>";
                            printStars($attent_fast_resp);
                            echo "</td>";
                            echo "<td>";
                            echo "<span>" . number_format((float)$rules_know, 2, '.', '') . "/5</span><br>";
                            printStars($rules_know);
                            echo "</td>";

                            echo "<td><button class='view_notes_btn' value='" . htmlspecialchars(json_encode($notes), ENT_QUOTES, 'UTF-8') . "'>" .
                                "عرض الملاحظات</button></td>";
                            echo "</tr>";
                        }
                    }
                    ?>

                </table>
                <div class="students_notes">
                    <button id="closing_btn" onclick="close()">&#10006;</button>
                    <h3>ملاحظات عن المرشدة</h3>
                    <h4 id="name_adv">سارة أحمد ناصر</h4>
                    <br>
                    <!-- <div class="stu_note">
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
                    <br> -->

                </div>



            </div>


        </div>

        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>