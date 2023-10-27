<?php

use Firebase\Auth\Token\Exception\InvalidToken;
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../dbcon.php';
if(isset($_POST['login_btn'])){

$email=$_POST['email'];
$password=$_POST['password'];


try {
  

    $user = $auth->getUserByEmail("$email");
try{ 
    $signInResult = $auth->signInWithEmailAndPassword($email, $password);

   $idTokenString = $signInResult->idToken();

try {
    $verifiedIdToken = $auth->verifyIdToken($idTokenString);
    $uid = $verifiedIdToken->claims()->get('sub');
    $_SESSION['verified_user_id']=$uid;
    $_SESSION['idTokenString']=$idTokenString;
   $_SESSION="logged in sucessfully";
     header("Location: home.html");
} 
catch (InvalidToken $e) {
    echo 'The token is invalid: '.$e->getMessage();
}

   
}
   catch(Exception $e){
 echo "<h3>you are password or email is wrong </h3>";
   }

} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo "<h3>you are not registerd </h3>";
}




}
else{
    header("Location: login.php");
    exit();
}


?>