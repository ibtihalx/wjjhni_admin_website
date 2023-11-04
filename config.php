<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__.'/vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$auth = $firebase->getAuth();
$firestore = new FirestoreClient();
?>