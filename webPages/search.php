<?php
require '../vendor/autoload.php';

use webPages\models\Firestore;
// create object of firestore 
$f = new Firestore();

if (isset($_POST['Query'])) {
    $collection = $f->setCollectionName('students');

    $query = $_POST['Query'];
    $students = $f->getDocumentsByFieldValue("id", $query);
if(count($students)>0){


    foreach ($students as $student) {
        echo "<tr id='" . $student['uid'] . "'>";
        echo "<td> <input type='checkbox' class='check'  name='studentsUID[]' value='" . $student['uid'] . "' ></td>";
        echo '<td>' . $student['name'] . "</td>";
        echo '<td>' . $student['id'] . "</td>";
        echo '<td class="stu_email">' . $student['email'] . "</td>";
        echo '<td>' . $student['major'] . "</td>";


        echo "</tr>";
    }
    }
    else{
        $students=$f->getAllDocuments();
        foreach ($students as $student) {
            echo "<tr id='" . $student['uid'] . "'>";
            echo "<td> <input type='checkbox' class='check'  name='studentsUID[]' value='" . $student['uid'] . "' ></td>";
            echo '<td>' . $student['name'] . "</td>";
            echo '<td>' . $student['id'] . "</td>";
            echo '<td class="stu_email">' . $student['email'] . "</td>";
            echo '<td>' . $student['major'] . "</td>";


            echo "</tr>";
        }

    }

}

if (isset($_POST['Name'])) {
    $collection = $f->setCollectionName('academic_advisors');
    $query = $_POST['Name'];
    $advisors = $f->searchDocumentsByName($query);
    if (!empty($advisors)) {


        foreach ($advisors as $advisor) {
            echo "<tr id='" . $advisor['uid'] . "'>";
            echo "<td> <input type='checkbox' class='check' name='advisorsUID[]' value='" . $advisor['uid'] . "'></td>";
            echo '<td>' . $advisor['name'] . "</td>";
            echo '<td class="stu_email">' . $advisor['email'] . "</td>";
            echo '<td>' . $advisor['department'] . "</td>";
            echo "</tr>";
        }
    } else {
        $advisors = $f->getAllDocuments();
        foreach ($advisors as $advisor) {
      
        echo "<tr id='" . $advisor['uid'] . "'>";
        echo "<td> <input type='checkbox' class='check' name='advisorsUID[]' value='" . $advisor['uid'] . "'></td>";
        echo '<td>' . $advisor['name'] . "</td>";
        echo '<td class="stu_email">' . $advisor['email'] . "</td>";
        echo '<td>' . $advisor['department'] . "</td>";
        echo "</tr>";
    }
    }
}

