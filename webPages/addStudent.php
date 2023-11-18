<?php
session_start();
$_SESSION['page'] = 'addStudent.php';

require '../vendor/autoload.php';
include '../dbcon.php';
use Google\Cloud\Firestore\FirestoreClient;

require_once 'mailer.php';

putenv('models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json');
$projectId = 'wjjhni';
$databaseId = '(default)';

$firestore = new FirestoreClient([
    'projectId' => $projectId,
    'databaseId' => $databaseId,
]);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Add page</title>
</head>


<body>

    <header>
        <img src="images/logo.png" alt="logo">
        <button id="logout">تسجيل الخروج
            <span><img src="images/logout.svg"></span></button>

    </header>


    <div class="bg-continer">





        <div class="warper">

            <h1>إضافة الطالبات</h1>

            <br>
            <div class="continer">

                <div class="wrap_stu">
                    <header id="stu_header">تحميل الملفات</header>
                    <form action="" method="post" enctype="multipart/form-data" id="stu_file">
                        <p id="file_hint">
                            يجب أن تكون صيغة الملف
                            .csv

                        </p><br>
                        <input type="file" name="file" accept=".csv"><br>
                        <input type="submit" value="Add">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </form>


                    <?php

                    if (isset($_FILES['file'])) {
                        // Access 'file' key in $_FILES array
                        // Your code here

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $uploadDir = 'uploads/';

                            if (!file_exists($uploadDir)) {
                                mkdir($uploadDir, 0777, true);
                            }

                            $uploadedFile = $uploadDir . basename($_FILES['file']['name']);
                            $fileType = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION));

                            // Check if the file is a CSV file
                            if ($fileType === 'csv') {
                                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
                                    echo 'File has been uploaded and saved.';
                                } else {
                                    echo 'There was an error uploading the file.';
                                }
                            } else {
                                echo 'Please upload a CSV file.';
                            }
                        }
                    } else {
                    }

                    if (isset($_FILES['file'])) {
                        // Access 'file' key in $_FILES array
                        // Your code here

                        $csvFile = "uploads/" . $_FILES['file']['name'];
                        if (($handle = fopen($csvFile, 'r')) !== FALSE) {
                            $headers = fgetcsv($handle);
                            while (($data = fgetcsv($handle)) !== FALSE) {
                                $rowData = array_combine($headers, $data); // Combine headers with row data

                                // Insert data into Firestore with auto-generated document ID
                                $collection = $firestore->collection('students'); // Replace with your collection name
                                $newDoc = $collection->add($rowData);
                                $password = randomPassword();
                                $userProperties = [
                                    'email' => $rowData['email'],
                                    'emailVerified' => false,
                                    'password' => $password,
                                    'disabled' => false,
                                ];


                                $createdUser = $auth->createUser($userProperties);
                                sendEmail($rowData['email'], $password);



                            }

                            fclose($handle); // Close the CSV file
                        }
                    } else {
                    }


                    function randomPassword()
                    {
                        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                        $pass = array(); //remember to declare $pass as an array
                        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                        for ($i = 0; $i < 8; $i++) {
                            $n = rand(0, $alphaLength);
                            $pass[] = $alphabet[$n];
                        }
                        return implode($pass); //turn the array into a string
                    }


                    ?>


                </div>
            </div>

        </div>

        <?php
        include("nav.php");

        ?>

    </div>

</body>


</html>