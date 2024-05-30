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
$advisors = $collection->getAlldocumentsOrdered("name");


$db_rating = new Firestore();
$collection2 = $db_rating->setCollectionName('ratings');

// create object of firestore 
$db_rate_check = new Firestore();
$col = $db_rate_check->setCollectionName("rating_activation");
$db_rate_check->setDocumentName("activationDocument");
$doc = $db_rate_check->getData();
$isActive = $doc['isActive'];



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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        if (response !== undefined && response !== null) {
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
                        } else {
                            console.error("Response is undefined or null");
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



    <script>

    </script>

</head>

<script>
    $(document).ready(function() {
        // Event listener for dynamically added .view_notes_btn elements
        $(document).on("click", ".view_notes_btn", function() {
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

        // Event listener for select change
        $("#filterCriteria").change(function() {
            var selectedOption = $(this).val();
            // Reorder the table based on the selected option
            if (selectedOption === "highRate") {
                // Sort in descending order of general rating
                var rows = $("table tbody tr").get();
                rows.sort(function(row1, row2) {
                    var rating1 = $(row1).find("td:last").text().trim();
                    var rating2 = $(row2).find("td:last").text().trim();
                    // Handle "-" rating
                    if (rating1 === "-") rating1 = -1; // Assign a default value
                    if (rating2 === "-") rating2 = -1; // Assign a default value
                    return parseFloat(rating2) - parseFloat(rating1);
                });
                $("table tbody").empty().append(rows);
            } else if (selectedOption === "lowRate") {
                // Sort in ascending order of general rating
                var rows = $("table tbody tr").get();
                rows.sort(function(row1, row2) {
                    var rating1 = $(row1).find("td:last").text().trim();
                    var rating2 = $(row2).find("td:last").text().trim();
                    // Handle "-" rating
                    if (rating1 === "-") rating1 = 0; // Assign a large value
                    if (rating2 === "-") rating2 = 0; // Assign a large value
                    return parseFloat(rating1) - parseFloat(rating2);
                });
                $("table tbody").empty().append(rows);
            }
        });


        var noResultsMessage = $("<tr id='noResultsRow'><td colspan='7'>لا توجد نتائج</td></tr>");
        // Search functionality
        $("#searchInput").on("keyup", function() {
            var searchText = $(this).val().toLowerCase();
            var resultFound = false;
            $("table tbody tr").each(function() {
                var advisorName = $(this).find("td:first").text().toLowerCase();
                if (advisorName.indexOf(searchText) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                    resultFound = true;
                }
            });
            if (!resultFound && searchText.length > 0) {
            $("#table_heads").hide();
            if ($("#noResultsRow").length === 0) {
                $("table").append(noResultsMessage); // Append the message if no results are found
            }
        } else {
            $("#table_heads").show();
            $("#noResultsRow").remove(); // Remove the message if results are found or the search text is empty
        }
        });
    });
</script>

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
            <div></div>

            <select id="filterCriteria">
                <option value="all">ترتيب حسب:</option>
                <option value="highRate">الأعلى تقييما</option>
                <option value="lowRate">الأقل تقييما</option>
                <!-- Add more options as needed -->

            </select>


            <div class="continer">
                <div class="searchDiv" style="height: 50px;"><input type="text" id="searchInput" placeholder="بحث بالاسم">&nbsp;<i class="fa fa-search" aria-hidden="true" style="color:#375E98;"></i></input></div>

                <table>
                    <tr id="table_heads">
                        <th>اسم المرشدة</th>
                        <th>عدد المقيمات</th>
                        <th>تقييم الدعم والتوجيه</th>
                        <th> تقييم الإلمام بالأنظمة ولوائح الجامعة</th>
                        <th> تقييم التواجد وسرعة الرد</th>
                        <th>ملاحظات الطالبات</th>
                        <th>التقييم العام</th>
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
                            echo "<td>-</td>";
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
                                if ($rate['studentComment'] !== "") {
                                    $comments[$rate['studentComment']] = $rate['addedDate'];
                                }
                            }
                            $notes = array($adv['name'] => $comments);
                            // Calculate average ratings
                            $support_direct_rate = $support_direct_rate / $numberOfRatings;
                            $attent_fast_resp = $attent_fast_resp / $numberOfRatings;
                            $rules_know = $rules_know / $numberOfRatings;
                            $general_rating = ($support_direct_rate + $attent_fast_resp + $rules_know) / 3;

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

                            echo "<td>" . number_format((float)$general_rating, 2, '.', '') . "/5</td>";
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


                </div>



            </div>


        </div>

        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>