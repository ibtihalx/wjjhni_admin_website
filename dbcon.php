<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__.'/vendor/autoload.php';
// require __DIR__.'vendor\autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\Auth;
$serviceAccountFilePath = 'models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json';

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

if (file_exists($serviceAccountFilePath) && is_readable($serviceAccountFilePath)) {
    // Proceed with Firebase initialization
    // print("exist");
} else {
    die("Service account file is missing or not readable.");
}
$factory = (new Factory)->
withServiceAccount('models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json')
  ->withDatabaseUri('https://wjjhni-default-rtdb.firebaseio.com/');

  $database = $factory->createDatabase();
  $auth = $factory->createAuth();
  
  // $user = $auth->getUserByEmail("try@gmail.com");

  ?>