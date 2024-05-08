<?php
session_start();

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

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
    <style>
    .loading-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .loading-spinner {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10000;
    }
</style>

    <title>إضافة الطالبات</title>
</head>


<body>

    <header>
        <img src="images/logo.png" alt="logo">
        <h1 class="title"> وجّهني نظام الإرشاد الأكاديمي </h1>
        <button id="logout" onclick="window.location.href = 'logout.php';">تسجيل الخروج
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
                    <h4> صياغة الملف المطلوبة: </h4>
                    <img src="images/stdsample.png" alt="studentsSample">
                    <br>
                    <form action="download.php" method="post">
                        <div class="buttonContainer">
                            <button type="submit" name="download_csv_form1" class="button-1">تحميل نموذج</button>
                        </div>
                    </form>


                    <br>
                    
                    <div class="loading-panel" id="loadingPanel">
                        <div class="loading-spinner"></div>
                    </div>
    
    <br>
                    <form action="" method="post" enctype="multipart/form-data" id="stu_file">
                        <p id="file_hint">
                            يجب أن تكون صيغة الملف
                            "csv."

                        </p>

                        <br>
                        <label for="fileInput" class="custom-file-upload">تحميل ملف
                            <input type="file" name="file" accept=".csv" id="fileInput" style="display:none;">
                        </label><br>
                        <div id="uploaded"></div>
                        <br>
                        <input type="submit" value="أضف +" class="custom-file-upload" id="addButton">
                        <br>

                        <div class="error-message" id="show">
                            <span class="error-text" id="errormessage">
                            </span>
                        </div>
                        <div class="success-message" id="show1">
                            <span class="success-text" id="successmessage">
                            </span>
                        </div>


                    </form>

                    <div id="loadingOverlay" class="loading-overlay"></div>

                <!-- Loading spinner -->
                <div id="loadingSpinner" class="loading-spinner">
                    <i class="fas fa-spinner fa-spin fa-5x"></i>
                </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#fileInput').change(function() {
                                if ($(this).val()) { // to check if file choosen or not
                                    document.getElementById("uploaded").innerHTML = "تم اختيار ملف, الرجاء الضغط على ’أضف’";
                                }
                            });
                        });

                        document.addEventListener('DOMContentLoaded', function() {
                            document.getElementById('addButton').addEventListener('click', function() {
                                showLoading();
                            });

                            function showLoading() {
                                document.getElementById('loadingOverlay').style.display = 'block';
                                document.getElementById('loadingSpinner').style.display = 'block';
                            }
                        });
                    </script>

                    <?php
                    $added = 0;
                    $num=0;
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
                    ?>
                                    <script>
                                        document.getElementById("errormessage").innerHTML = "<p>" + 'هناك خطأ في تحميل الملف!' + "</p>";
                                    </script>
                                <?php
                                }
                            } else {
                                ?>
                                <script>
                                    document.getElementById("errormessage").innerHTML = "<p>" + 'صيغة الملف غير مدعومة! الرجاء إعادة المحاولة وإضافة ملف csv!' + "</p>";
                                </script>
                            <?php
                            }
                        }
                    } else {
                    }

                    if (isset($_FILES['file'])) {

                        // Access 'file' key in $_FILES array

                        $csvFile = "uploads/" . $_FILES['file']['name'];

                        if ((($handle = fopen($csvFile, 'r')) !== FALSE)) {
                            $std = fopen($csvFile, 'r');
                            $headers = fgetcsv($handle);

                            // check if file formula is correct by counting number of columns
                            $firstLine = fgets($std);
                            $columnsCount = count(explode(',', $firstLine));
                            if ($columnsCount == 5 && $headers[4] == "major") {
                                //to remove hidden Byte Order Mark (BOM) and white spaces 
                                $headers
                                    = preg_replace("/\xEF\xBB\xBF/", "", $headers);

                                $headers = preg_replace('/\s+/', '', $headers);

                                while (($data = fgetcsv($handle)) !== FALSE) {


                                    $rowData = array_combine($headers, $data); // Combine headers with row data


                                    // Insert data into Firestore with auto-generated document ID
                                    $collection = $firestore->collection('students');

                                    

                                    if (isset($data[2]) && isset($data[3])) {
                                        // $data[$columnIndex] contains the value of the desired column
                                        $columnValue = $data[2];
                                        $columnValue1 = $data[3];

                                        if ($data[3] != "" && $data[2] != "") {
                                        

                                        //check if a user already exists by email
                                        if ((!$f->checkDocumentExists('email', $columnValue)) && !$f->checkDocumentExists('id', $columnValue1)) {

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
                                                $rowData['AdvisorUID'] = "";
                                                $newDoc = $collection->add($rowData);
                                                sendEmail($rowData['email'], $password);
                                                $added = 1;
                                                $num= $num+1;
                                            } catch (Kreait\Firebase\Exception\Auth\EmailExists $e) {
                                            }
                                        }
                                    }
                                    
                                    }
                                
                                
                                
                                }
                            } else {
                                $added = 2;
                            }

                            ?>

                            <script>
                                var messageFromPHP1 = "<?php
                                                        if ($added == 1) {
                                                            echo 'تمت إضافة  '.$num.'  طالبة بنجاح';
                                                        } else {
                                                            echo '';
                                                        } ?>";
                                document.getElementById("successmessage").innerHTML = "<p>" + messageFromPHP1 + "</p>";


                                var messageFromPHP = "<?php
                                                        if ($added == 0) {
                                                            echo 'لم تتم الإضافة, جميع الطالبات مضافات مسبقاً!';
                                                        } else if ($added == 2) {
                                                            echo 'صياغة الملف خاطئة, الرجاء التقيد بالصياغة في الأعلى!';
                                                        } ?>";
                                document.getElementById("errormessage").innerHTML = "<p>" + messageFromPHP + "</p>";
                            </script>

                    <?php


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