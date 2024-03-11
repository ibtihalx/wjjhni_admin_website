<?php
require '../vendor/autoload.php';
include '../dbcon.php';
use webPages\models\Firestore;
$f = new Firestore();
$collection = $f->setCollectionName('students');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['students'])){
        // Retrieve student IDs from POST data
        $selectedStudents = $_POST['students'];
        // Process the selected student IDs
        foreach ($selectedStudents as $studentID) {
            // delete  with each student ID
            // echo "Selected Student ID: " . $studentID . "<br>";
        }

    }
    echo(count($selectedStudents));
   
   
}
