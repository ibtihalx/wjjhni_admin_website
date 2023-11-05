<?php
require '../vendor/autoload.php';
use Firebase\Auth\Token\Exception\InvalidToken;
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../dbcon.php';

if(isset($_POST['login_btn'])){

$email=$_POST['email'];
$password=$_POST['password'];
    // $user = $auth->getUserByEmail("$email");

try {
 $_SESSION["showError"]=false;

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
     header("Location: home.php");
} 
catch (InvalidArgumentException $e) {
    echo 'The token is invalid: '.$e->getMessage();
       $_SESSION["showError"]=true;
     header("Location: index.php");
  
}

   
}
   catch(Exception $e){
 echo "<h3>you are password or email is wrong </h3>";
   $_SESSION["showError"]=true;
     header("Location: index.php");
   }

} catch (Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo "<h3>you are not registerd </h3>";
       $_SESSION["showError"]=true;
     header("Location: index.php");
}

 catch (Kreait\Firebase\Exception\InvalidArgumentException $e) {
    echo "<h3>your email is invaild </h3>";
       $_SESSION["showError"]=true;
     header("Location: index.php");
}




}
else{
    header("Location: index.php");
    exit();
}


?>