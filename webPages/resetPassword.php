<?php
require '../vendor/autoload.php';

session_start();
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);
include '../dbcon.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعيين كلمة المرور</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>


    <div class="warper">

        <div class="form-box login">
            <h2> تعيين كلمة المرور</h2>
            <br>
            <div id="update_paas_successfully">تم إرسال رابط تعيين كلمة المرور بنجاح</div>
            <div id="update_paas_worng_pass2"> لا يوجد حساب بهذا البريد الإلكتروني</div>
            <form action="resetPassword.php" method="post">
                <div class="input-box">

                    <input name="email" type="email" required>
                    <label>البريد الإلكتروني</label>
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                </div>
                <button type="submit" class="btn" name="update_btn">إرسال رابط تعيين كلمة المرور</button>

                <div id="link1"><a href="index.php">الذهاب إلى صفحة تسجيل الدخول</a>
            </form>
        </div>
    </div>




    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<?php
//if button clicked then 
if (isset($_POST['update_btn'])) {
    //get email
    $email = $_POST['email'];


    try {
//check if the user found or not
        $user = $auth->getUserByEmail($email);
      
        $auth->sendPasswordResetLink($email);

        //send ereset link successfully show a confirmation
            echo '<script>
                document.getElementById("update_paas_successfully").style.display="block";
            </script>';
        
    } catch (Exception $e) {

        echo '<script>
            document.getElementById("update_paas_worng_pass2").style.display="block";
        </script>';
    }
}


?>

</html>