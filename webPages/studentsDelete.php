<?php session_start();
$_SESSION['page'] = 'studentsDelete.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
require '../vendor/autoload.php';

     
use webPages\models\Firestore;

$f = new Firestore();

$collection = $f->setCollectionName('students');
$students = $collection->getAlldocumentsOrdered("id");
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

                $(".no_del_btn").click(function() {

                    $('.del_page_div > *:not(.confim_delete)').css("filter", "none");

                    $(".confim_delete").hide();
                });
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $(".progress").hide();
            $(".yes_del_btn").click(function() {
                event.preventDefault(); // Prevent default form submission
                $(".check").prop('disabled', true); // Disable checkboxes
                $(".progress").show();

                $(".confim_delete").hide();
                $('.del_page_div > *:not(.confim_delete)').css("filter", "none");
                var selectedStudents = [];
                $('input[name="studentsUID[]"]:checked').each(function() {
                    selectedStudents.push($(this).val());
                });

                $.ajax({
                    type: "POST",
                    data: {
                        students: selectedStudents
                    },
                    url: "deleteScript.php",
                    success: function(msg) {
                        $(".check").prop('disabled', false); // Enable checkboxes
                        $(".progress").hide();
                        selectedStudents.forEach(function(studentRow) {
                            $("#" + studentRow).remove();
                        });

                        $("#con_delete_stu").css("display", "block");
                        $("#con_text").html("تم حذف " + msg + " طالبات");



                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            let timer;
            $('#searchInput').keyup(function() {

                clearTimeout(timer);
                timer = setTimeout(function() {
                    var query = $('#searchInput').val();
                    // alert(query);
                   
                    $.ajax({
                        url: 'search.php', // Server-side script to handle search
                        method: 'POST',
                        data: {
                            Query: query
                        },
                        success: function(response) {
                            if (response != null) {
                                $('#dataBody').html(response);
                            }

                        }
                    });
                }, 1000);



            });
        });
    </script>
    <script>
        // // Enable delete button if at least one checkbox is checked
        // const checkboxes = document.querySelectorAll('.check');
        // const deleteButton = document.getElementById('deleteButton');

        // checkboxes.forEach(checkbox => {
        //     checkbox.addEventListener('change', function() {
        //         let atLeastOneChecked = false;
        //         checkboxes.forEach(cb => {
        //             if (cb.checked) {
        //                 atLeastOneChecked = true;
        //             }
        //         });
        //         deleteButton.disabled = !atLeastOneChecked;
        //     });
        // });
        $(document).ready(function() {
            // Enable delete button if at least one checkbox is checked
            $(document).on('change', '.check', function() {
                let atLeastOneChecked = false;
                $('.check').each(function() {
                    if ($(this).prop('checked')) {
                        atLeastOneChecked = true;
                    }
                });
                $('#deleteButton').prop('disabled', !atLeastOneChecked);
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

            <h1> حذف الطالبات </h1>
            <br>

            <div class="continer">
                <div class="del_page_div">
                    <div class="delete_hint">
                        <h3 id="del_header">لحذف طالبة يرجى اتباع الآتي:</h3>
                        <br>
                        <ul>
                            <li>اختيار الطالبات المراد حذفهن من الجدول</li>
                            <li>الضغط على زر تأكيد الحذف</li>
                        </ul>
                    </div>

                    <div id="con_delete_stu">
                        <i class="fa fa-check-circle-o" style="font-size:48px;color:green" aria-hidden="true"></i>
                        <h3 id="con_text">تم حذف 4 طالبات بنجاح</h3>
                    </div>
                    <div class="searchDiv"><input type="text" id="searchInput" placeholder="بحث بالرقم الجامعي">&nbsp;<i class="fa fa-search" aria-hidden="true" style="color:#375E98;"></i></input></div>
                    <div class="progress">
                        <div class="progress__ring" role="progressbar" aria-describedby="progress__message" tabindex="0"></div>

                        <div class="progress__message" id="progress__message">..جاري الحذف</div>
                    </div>


                    <table>
                        <thead>
                            <tr>
                                <th>
                                    اختيار
                                </th>
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
                            </tr>
                        </thead>


                        <form method="POST">
                            <tbody id="dataBody">

                                <?php

                                //get all student info
                                foreach ($students as $student) {
                                    echo "<tr id='" . $student['uid'] . "'>";
                                    echo "<td> <input type='checkbox' class='check'  name='studentsUID[]' value='" . $student['uid'] . "' ></td>";
                                    echo '<td>' . $student['name'] . "</td>";
                                    echo '<td>' . $student['id'] . "</td>";
                                    echo '<td class="stu_email">' . $student['email'] . "</td>";
                                    echo '<td>' . $student['major'] . "</td>";


                                    echo "</tr>";
                                }
                                ?>
                            </tbody>



                    </table>

                    <button type="button" class="delte_btn" name="delete_stu" id="deleteButton" disabled> <i class="fa fa-trash"></i> حذف </button>
                    <div class="confim_delete" id="conf">
                        <h4>هل أنت متأكد من الحذف؟</h4>
                        <br>
                        <button type="submit" class="no_del_btn">لا</button>&nbsp;&nbsp;
                        <button class="yes_del_btn" name="confiremd_delete">نعم</button>

                    </div>
                    </form>
                </div>

            </div>
        </div>
        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>