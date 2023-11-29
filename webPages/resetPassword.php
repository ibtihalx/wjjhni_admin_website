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
    <title>تحديث كلمة المرور</title>
    <link rel="stylesheet" type="text/css" href="login.css">





</head>

<body>


    <div class="warper">

        <div class="form-box login">
            <h2> تحديث كلمة المرور</h2>
            <br>
            <div id="update_paas_successfully">تم تحديث كلمة المرور بنجاح</div>
            <div id="update_paas_worng_pass">يجب أن تكون كلمة المرور ستة أحرف وأكثر </div>
            <div id="update_paas_worng_pass2">البريد الإلكتروني خاطئ</div>
            <form action="resetPassword.php" method="post">
                <div class="input-box">

                    <input name="email" type="email" required>
                    <label>البريد الإلكتروني</label>
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                </div>
                <!-- <div class="input-box">

                    <input name="old_pass" type="password" required>
                    <label>كلمة المرور القديمة</label>
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                </div> -->

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon>

                    </span>
                    <input name="new_password" type="password" required>
                    <label>كلمة المرور الجديدة</label>
                </div>

                <button type="submit" class="btn" name="update_btn">تحديث</button>

                <div id="link1"><a href="index.php">الذهاب إلى صفحة تسجيل الدخول</a>
            </form>
        </div>
    </div>




    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<?php
if (isset($_POST['update_btn'])) {
    $email = $_POST['email'];
    $oldPassword = $_POST['old_pass'];
    $newPassword = $_POST['new_password'];


    try {
        // Authenticate the user with their email and old password
        // $user = $auth->signInWithEmailAndPassword($email, $oldPassword);
        $user = $auth->getUserByEmail($email);
        if (strlen($newPassword) < 6) {
            throw new Exception('Password must be at least 6 characters long');
        }

        // Change the user's password
        $auth->changeUserPassword($user->uid, $newPassword);


        // Password successfully changed
        // echo 'Password updated successfully';
        echo '<script>
  
    document.getElementById("update_paas_successfully").style.display="block";
    </script>';

    
    } catch (Kreait\Firebase\Exception\FirebaseException $e) {
        // Handle other Firebase authentication errors
        echo '<script>
  
    document.getElementById("update_paas_worng_pass2").style.display="block";
    </script>';
    } catch (Exception $e) {
        // Handle other exceptions, including short password
        echo '<script>
  
    document.getElementById("update_paas_worng_pass").style.display="block";
    </script>';
    }
}


?>

</html>