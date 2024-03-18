<?php
session_start();

$_SESSION['page'] = 'addStudent.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
    exit();
}
require '../vendor/autoload.php';

use webPages\models\Firestore;
// create object of firestore 
$f = new Firestore();
$f->setCollectionName("rating_activation");
$f->setDocumentName("activationDocument");
if(isset($_POST['check'])){
    $document=$f->getData();
    echo $document['isActive'];
    exit();
}




if(isset($_POST['update'])){
    $value= $_POST['update'];
    
    $refrence=$f->getDocment();
    $refrence->update([['path' => 'isActive', 'value' => $value]]);
    echo ($value);
    exit();

}
