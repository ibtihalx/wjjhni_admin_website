<?php session_start();
$_SESSION['page'] = 'advisorsDelete.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title>حذف المرشدات الأكاديميات</title>
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
                <div class="delete_hint">

                </div>
            </div>
        </div>

        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>