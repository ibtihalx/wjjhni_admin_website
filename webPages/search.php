<?php
require '../vendor/autoload.php';

use webPages\models\Firestore;
// create object of firestore 
$f = new Firestore();
$collection = $f->setCollectionName('students');

if (isset($_POST['Query'])) {
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
