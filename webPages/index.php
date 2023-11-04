
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login registration</title>
    <link rel="stylesheet" type="text/css" href="login.css">

</head>


</head>

<body>
    <!-- <header>
        <img  src="images/logo.png" alt="">

    </header> -->

    <div class="warper">

        <div class="form-box login">
            <h2>تسجيل الدخول</h2>
            <div>hello</div>
            <form action="logincode.php" method="post">
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
    <script src="script.js"></script>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

</html>