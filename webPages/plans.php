<?php session_start();
$_SESSION['page'] = 'plans.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}

use Carbon\Carbon;
use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Storage\StorageClient;

require '../vendor/autoload.php';
include '../dbcon.php';
putenv('models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json');
$projectId = 'wjjhni';
$databaseId = '(default)';

use webPages\models\Firestore;

$f = new Firestore();

$client = new FirestoreClient([
    'projectId' => $projectId,
]);

$collectionRef = $client->collection("plans");
$documents = $collectionRef->documents();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.0/firebase-firestore.js"></script>

    <link rel="stylesheet" type="text/css" href="shared.css">
    <style>
        .inp {
        display: none;
        }

        .progressBar {
        width: 250px;
        background: rgb(196, 193, 193);
        padding: 15px 20px;
        position: relative;
        }

        .progress {
        height: 100%;
        width: 0%;
        background: linear-gradient(75deg, rgb(11, 65, 173), rgb(179, 10, 165));
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        }

        .selectImage {
            font-weight: bold;
            font-size: 14px;
            background: #375E98;
            color: white;
            padding: 9px 12px;
            border-radius: 10px;
        }

        .selectImage:hover {
            background-color: #8da5c8;
        }

        .upload {
            font-weight: bold;
            font-size: 14px;
            background: green;
            color: white;
            padding: 9px 12px;
            border-radius: 10px;
        }

        .upload:hover {
            background-color:#66B266 ;
        }

        button {
        cursor: pointer;
        border: none;
        margin: 10px 0;
        }

        .filedata {
        background: cadetblue;
        padding: 10px 15px;
        font-size: 14px;
        max-width: 200px;
        text-overflow: ellipsis;
        border-radius: 10px;
        display: none;
        overflow: hidden;
        margin: 10px 0;
        }



        .loading {
        display: none;
        }
    </style>

    <title>الخطط الدراسية</title>
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

            <h1>الخطط الدراسية </h1>
            <br>

            <div class="continer">

            <span class="loading"></span>
            
            <div class="forms">
                <div>
            <label for="options" style="font-size:20px;">:اختيار التخصص </label>
            <br>
            <select id="options" class="dropdown" name="selectedOption" onchange="getSelectedOption()">
                <option disabled selected>اختيار تخصص</option>
                <option>تقنية المعلومات مسار عام</option>
                <option>تقنية المعلومات مسار أمن سيبراني</option>
                <option>تقنية المعلومات مسار علم البيانات والذكاء الاصطناعي</option>
                <option>تقنية المعلومات مسار الشبكات وهندسة إنترنت الأشياء</option>
                <option>نظم المعلومات</option>
                <option>هندسة البرمجيات</option>
                <option>علوم الحاسب</option>
                
            </select>
            <br>
                    <br><span class="filedata"></span>
                    <div id="buttonss">
                        <div>
                            <input type="file" class="inp" id="getImageDataInput" />
                            <button id="selectImageBtn" class="selectImage">اختيار ملف</button>
                        </div>
                        <div>
                            <button id="uploadDocumentBtn" class="upload">+    إرفاق</button>
                        </div>
                    </div>

                </div>
                
                    <div class="success-message" id="show1">
                    <span class="success-text" id="successmessage"><?= (isset($_GET['success'])?'تم إرفاق الخطة بنجاح':'') ?>
                        </span>
                    </div> 

                    <br>

                    <table>
                        <label style="font-size: 20px";>:الخطط المُضافة</label>
                        <br>
                    <tr>
                        <th style="width:350px;">اسم التخصص</th>
                        <th style="width:200px;">تاريخ الإضافة</th>
                    </tr>
                    <?php 
                        foreach ($documents as $document) {
                            $data = $document->data();
                            $name1= "هندسة البرمجيات";
                            
                            $nestedCollectionRef = $document->reference()->collection("courses");
                            $nestedDocuments = $nestedCollectionRef->documents();
                            foreach ($nestedDocuments as $nestedDocument) {
                                
                            $createTime = $nestedDocument->createTime();
                            $carbon = Carbon::parse($createTime);
                            $carbon->setTimezone('Asia/Riyadh');
                            
                            $nestedData = $nestedDocument->data();
                            if ( $data["name"] === "قسم علوم الحاسب" ){
                                $name1="علوم الحاسب";
                            }else if ( $data['name'] === " قسم نظم المعلومات"){
                                $name1="نظم المعلومات";
                            } else if ( $data['name'] === "قسم تقنية المعلومات"){
                                if ( $nestedData['course_name'] === "أمن سيبراني"){
                                    $name1="تقنية المعلومات(أمن سيبراني)";
                                } else if ( $nestedData['course_name'] === "مسار عام"){
                                    $name1="تقنية المعلومات(مسار عام)";
                                } else if( $nestedData['course_name'] === "شبكات وهندسة انترنت"){
                                    $name1="تقنية معلومات(شبكات وهندسة إنترنت الأشياء)";
                                } else {
                                    $name1="تقنية المعلومات(علم البيانات والذكاء الاصطناعي)";
                                }
                            }
                            ?>
                            <tr>
                                <td> <?= $name1 ?></td>
                                <td> <?= $carbon->format('Y-m-d h:i:s') . PHP_EOL ?> </td>
                            </tr> 
                             <?php
                            }
                        }

                    ?>



                </table>
                    

                   
    </div>


                <script type="module" src="./assets/js/firebase2.js"></script>
                <script type="module" src="./assets/js/custom2.js"></script>
            </div>
        </div>

        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>