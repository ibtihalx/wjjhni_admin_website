<?php
// phpinfo();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (extension_loaded('grpc')) {
    echo 'gRPC extension is enabled.';
} else {
    echo 'gRPC extension is not enabled.';
}
require '../vendor/autoload.php';
use webPages\models\Firestore;


 $f=new Firestore();

 $collection=$f->setCollectionName('students');

 print_r($collection->setDocumentName('0gEKzW5F8Zlak1xSU3gX')->getData('name'));
//  print_r($db->getStudent());
