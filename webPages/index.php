
<?php

session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login registration</title>
    <link rel="stylesheet" type="text/css" href="login.css">





</head>

<body>
    <!-- <header>
        <img  src="images/logo.png" alt="">

    </header> -->

    <div class="warper">

        <div class="form-box login">
            <h2>تسجيل الدخول</h2>
            <br>
            <div id="login_error_msg">كلمة المرور خاطئة أو البريد الإلكتروني خاطئ<br> الرجاء المحاولة مرة أخرى .</div>
            <form action="login.php" method="post">
                <div class="input-box">

                    <input name="email" type="email" required>
                    <label>البريد الإلكتروني</label>
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon>

                    </span>
                    <input name="password" type="password" required>
                    <label>كلمة المرور</label>
                </div>

                <button type="submit" class="btn" name="login_btn">تسجيل الدخول </button>


            </form>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    <?php 
    if( $_SESSION["showError"]==true){
    echo'<script>
    // alert("hello");
    document.getElementById("login_error_msg").style.display="block";
    </script>';
    session_destroy();
}
    
    ?>
</html>
