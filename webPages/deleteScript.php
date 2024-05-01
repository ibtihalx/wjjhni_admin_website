<?php
require '../vendor/autoload.php';
include '../dbcon.php';

use webPages\models\Firestore;

$f = new Firestore();
$collection = $f->setCollectionName('students');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['students'])) {
        $collection = $f->setCollectionName('students');
        // Retrieve student IDs from POST data
        $selectedStudents = $_POST['students'];
        $count = 0;
        // Process the selected student IDs
        foreach ($selectedStudents as $studentID) {
            // delete  with each student ID
            // echo "Selected Student ID: " . $studentID . "<br>";
            $f->deleteDocumentsByFieldValue("uid", $studentID);
            $auth->deleteUser($studentID);
            $count = $count + 1;
        }
    }
    echo ($count);
}
if (isset($_POST['advisors'])) {
    $f2 = new Firestore();
    $collection = $f->setCollectionName('academic_advisors');
    $collection = $f2->setCollectionName('students');
    $selectedAdvisors = $_POST['advisors'];
    $count = 0;
   
    foreach ($selectedAdvisors as $advisorID) {
       
        $f->deleteDocumentsByFieldValue("uid", $advisorID);
        $auth->deleteUser($advisorID);
       $advisor_students= $f2->getDocumentsRefrenceByFieldValue("AdvisorUID", $advisorID);
       foreach($advisor_students as $student ){
$student->update([['path' => 'AdvisorUID', 'value' => '']]);

       }
        $count = $count + 1;
    }
    echo ($count);
}

if (isset($_POST['academic_form'])) {

    try{
        $f = new Firestore();
        $collection = $f->setCollectionName('academic_forms');
        $selectedForms = $_POST['academic_form'];
        $f->deleteDocumentsByFieldValue("id", $selectedForms);
        echo true;
    }catch(Exception $e){
        echo false;
    }
}

if (isset($_POST['plans']) && isset($_POST['course'])) {
    try{
        $f = new Firestore();
        // deleted nested course by id from the plan collection
        $collection = $f->setCollectionName('plans');
        $selectedPlans = $_POST['plans'];
        $selectedCourse = $_POST['course'];
        $f->deleteNestedDocumentByFieldValue("plans", $selectedPlans, "courses", "id", $selectedCourse);
        echo true;
    }catch(Exception $e){
        echo false;
    }
}

