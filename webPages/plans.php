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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .loading2 {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            color: #375E98;
            font-size: 45px;
        }
        .loading2.show {
            display: block;
        }
        .loading-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9998;
        }

        .loading-overlay.show {
            display: block;
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

            <div class="loading-overlay"></div>
                <div class="loading2">
    <i class="fa fa-spinner fa-spin"></i>
</div>
            
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
                        <th style="width:150px;">حذف</th>
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
                            }else if ( $data['name'] === "قسم نظم المعلومات"){
                                $name1="نظم المعلومات";
                            } else if ( $data['name'] === "قسم تقنية المعلومات"){
                                if ( $nestedData['course_name'] === "أمن سيبراني"){
                                    $name1="تقنية المعلومات(أمن سيبراني)";
                                } else if ( $nestedData['course_name'] === "مسار عام"){
                                    $name1="تقنية المعلومات(مسار عام)";
                                } else if( $nestedData['course_name'] === "شبكات وهندسة الإنترنت"){
                                    $name1="تقنية معلومات(شبكات وهندسة إنترنت الأشياء)";
                                } else {
                                    $name1="تقنية المعلومات(علم البيانات والذكاء الاصطناعي)";
                                }
                            }
                            ?>
                            
                            <tr id="<?php echo $nestedDocument->id();  ?>">
                                <td> <?= $name1 ?></td>
                                <td> <?= $carbon->format('Y-m-d h:i:s') . PHP_EOL ?> </td>
                                <td style="width:150px;">
                                        <div class="buttonContainer">
                                            <button type="submit" class="delete_button" id="delete_btn" ><i class="fa fa-trash" id="trashh" onclick="return deleteRow('<?php echo $document->id(); ?>','<?php echo $nestedDocument->id();  ?>')"> </i></button>
                                            </button>
                                            </div>
                                </td>
                            </tr> 
                             <?php
                            }
                        }

                     
                    ?>



                </table>
                    

                   
    </div>


                <script type="module" src="./assets/js/firebase2.js"></script>
                <script type="module" src="./assets/js/custom2.js"></script>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

                <script>
                    function deleteRow(parent,id) {
                        var r = confirm("هل أنت متأكد من الحذف؟");
                        if (r == true) {
                            $.ajax({
                                type: "POST",
                                data: {
                                    plans: parent,
                                    course: id
                                },
                                url: "deleteScript.php",
                                success: function(msg) {
                                    if(msg){
                                        $("tr#" + id).remove();

                                        $("#con_delete_stu").css("display", "block");
                                        $("#con_text").html("تم الحذف");
                                    }else{
                                        alert("حدث خطأ أثناء الحذف");
                                    }
                                }
                            });
                        }
                    }
                </script>


                
            </div>
        </div>

        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>