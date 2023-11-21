<?php
session_start();
$_SESSION['page'] = 'addStudent.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}

require '../vendor/autoload.php';
include '../dbcon.php';

use Google\Cloud\Firestore\FirestoreClient;
use webPages\models\Firestore;

require_once 'mailer.php';      // for email confirmation

putenv('models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json');
$projectId = 'wjjhni';
$databaseId = '(default)';
$f = new Firestore();      // Firestore object to access database
$f->setCollectionName('students');

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
                    <br>
                    <h4> صيغة الملف المطلوبة: </h4>
                    <img src="images/stdsample.png" alt="studentsSample">
                    <br>
                    <form action="" method="post" enctype="multipart/form-data" id="stu_file">
                        <p id="file_hint">
                            يجب أن تكون صيغة الملف
                            "csv."

                        </p><br>
                        <label for="fileInput" class="custom-file-upload">تحميل ملف
                            <input type="file" name="file" accept=".csv" id="fileInput" style="display:none;">
                        </label><br>
                        <div id="uploaded"></div>
                        <br>
                        <input type="submit" value="أضف +" class="custom-file-upload">    
                        <i class="fas fa-cloud-upload-alt"></i>

                    </form>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#fileInput').change(function() {
                                if ($(this).val()) {  // to check if file choosen or not
                                    document.getElementById("uploaded").innerHTML = "تم اختيار ملف, الرجاء الضغط على ’أضف’";
                                } 
                            });
                        });
                    </script>

                    <?php
                    $added = 0;
                    if (isset($_FILES['file'])) {
                        // Access 'file' key in $_FILES array

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
                                } else {
                                    echo 'هناك خطأ في تحميل الملف';
                                }
                            } else {
                                echo 'صيغة الملف غير مدعومة! الرجاء إعادة المحاولة وإضافة ملف csv';
                            }
                        }
                    } else {
                    }

                    if (isset($_FILES['file'])) {

                        // Access 'file' key in $_FILES array

                        $csvFile = "uploads/" . $_FILES['file']['name'];

                        if (is_uploaded_file($_FILES['file']['name']) && (($handle = fopen($csvFile, 'r')) !== FALSE)) {
                            $std = fopen($csvFile, 'r');
                            $headers = fgetcsv($handle);
                                
                            // check if file formula is correct by counting number of columns
                            $firstLine = fgets($std);
                            $columnsCount = count(explode(',', $firstLine));
                            if ($columnsCount == 6) {

                                while (($data = fgetcsv($handle)) !== FALSE) {
                                    $rowData = array_combine($headers, $data); // Combine headers with row data


                                    // Insert data into Firestore with auto-generated document ID
                                    $collection = $firestore->collection('students'); 

                                    if (isset($data[2])) {
                                        // $data[$columnIndex] contains the value of the desired column
                                        $columnValue = $data[2];

                                        //check if a user already exists by email
                                        if (!$f->checkDocumentExists('email', $columnValue)) {

                                            $password = randomPassword();
                                            $userProperties = [
                                                'email' => $rowData['email'],
                                                'emailVerified' => false,
                                                'password' => $password,
                                                'disabled' => false,
                                            ];
                                           
                                            try {
                                                $createdUser = $auth->createUser($userProperties);
                                                $rowData['uid'] = $createdUser->uid;
                                                $newDoc = $collection->add($rowData);
                                                sendEmail($rowData['email'], $password);
                                                $added = 1;
                                            } catch (Kreait\Firebase\Exception\Auth\EmailExists $e) {
                                                echo "لم تتم الإضافة, جميع الطالبات مضافات مسبقاً";
                                                exit;
                                            }
                                        }
                                    }
                                }
                            } else {
                                $added = 2;
                            }

                            
                            if ($added == 0) {
                                echo "لم تتم الإضافة, جميع الطالبات مضافات مسبقاً";
                            } else if ($added == 1) {
                                echo 'تمت الإضافة بنجاح';
                            } else if ($added == 2) {
                                echo "صياغة الملف خاطئة, الرجاء التقيد بالصياغة في الأعلى";
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