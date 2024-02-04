<?php session_start();
$_SESSION['page'] = 'academicForms.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}
use Google\Cloud\Firestore\FirestoreClient;
require '../vendor/autoload.php';
include '../dbcon.php';
putenv('models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json');
$projectId = 'wjjhni';
$databaseId = '(default)';
use webPages\models\Firestore;
$f = new Firestore();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>
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

    <title>النماذج الأكاديمية</title>
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

            <h1> النماذج الأكاديمية</h1>
            <br>

            <div class="continer">

            <span class="loading"></span>
            
            <div class="forms">
                <div>
            <label for="options" style="font-size:20px;">:اختيار اسم النموذج</label>
            <br>
            <select id="options" class="dropdown" name="selectedOption" onchange="getSelectedOption()">
                <option disabled selected>اختيار نموذج</option>
                <option>معالجة أوضاع التسجيل</option>
                <option>اعتذار عن مقرر دراسي</option>
                <option>اعتذار عن فصل دراسي</option>
                <option>إعادة قيد</option>
                <option>التحويل الخارجي</option>
                <option>قبول الطالب الزائر</option>
                <option>الانسحاب من القبول</option>
                <option>معالجة أوضاع التخصيص</option>
                <option>التحويل لكلية تتبع مسار آخر</option>
                <option>التحويل بين مسارات السنة الأولى المشتركة</option>
                <option>طلب تأجيل فصل دراسي</option>
                <option>إلغاء تأجيل فصل دراسي</option>
                <option>طالب زائر إلى جامعة أخرى</option>
                <option>طلب منح فرصة لاستكمال الدراسة</option>
                <option>تفويض</option>
                <option>طلب إصدار وثيقة</option>
                <option>قائمة الطلاب المحرومين</option>
                <option>طرح مقررات الفصل الصيفي</option>
            </select>
            <br>
                    <br><span class="filedata"></span>
                    <div id="buttonss">
                        <div>
                            <input type="file" class="inp" onchange="getImageData(event)" /><button onclick="selectImage()" class="selectImage">اختيار ملف</button>
                        </div>
                        <div>
                            <button onclick="uploadImage()" class="upload">+    إرفاق</button>
                        </div>
                    </div>

                </div>
                
                    <div class="success-message" id="show1">
                        <span class="success-text" id="successmessage">
                        </span>
                    </div> 

                   
            </div>
        
                    
        <script>
                const firebaseConfig = {
                    apiKey: "AIzaSyDI6ldQx14IuT_wEDt6Er076im2ukfeRzQ",
                    authDomain: "wjjhni.firebaseapp.com",
                    databaseURL: "https://wjjhni-default-rtdb.firebaseio.com",
                    projectId: "wjjhni",
                    storageBucket: "wjjhni.appspot.com",
                    messagingSenderId: "919936662501",
                    appId: "1:919936662501:web:cc53bfe12ad5580f33cd0c",
                    measurementId: "G-DNYPTYJ55N"
                };

                    const app = firebase.initializeApp(firebaseConfig);

                    const storage = firebase.storage();

                    const inp = document.querySelector(".inp");
                    const fileData = document.querySelector(".filedata");
                    const loading = document.querySelector(".loading");
                    let file;
                    let fileName;
                    let isLoading = false;
                    let uploadedFileName;
                    const selectImage = () => {
                        inp.click();
                    };

                    var selectedOption="";
                    function getSelectedOption() {
                        selectedOption = document.getElementById("options").value;
                    }

                    const getImageData = (e) => {
                        file = e.target.files[0];
                        var stringWithUnderscores = selectedOption.replace(/ /g, "_");
                        fileName = stringWithUnderscores;
                        
                        if (fileName) {
                        fileData.style.display = "block";
                        }
                        fileData.innerHTML = file.name+"   تم اختيار ";
                        
                        console.log(file, fileName);
                    };

                    const uploadImage = () => {
                        loading.style.display = "block";
                        const storageRef = storage.ref().child("MyForms");
                        const folderRef = storageRef.child(fileName);
                        const uploadtask = folderRef.put(file);
                        uploadtask.on(
                        "state_changed",
                        (error) => {
                            console.log(error);
                            document.getElementById("successmessage").innerText = "تم إرفاق النموذج بنجاح";
                        },
                        () => {
                            storage
                            .ref("MyForms")
                            .child(uploadedFileName)
                            .getDownloadURL()
                            .then((url) => {
                                console.log("URL", url);
                                if (!url) {
                                img.style.display = "none";
                                } else {
                                img.style.display = "block";
                                loading.style.display = "none";
                                }
                                img.setAttribute("src", url);
                            });
                            console.log("File Uploaded Successfully");
                            
                            
                        }
                        );

                        
                    };

                    

                
                    
            </script>

            </div>
        </div>

        <?php
        include('nav.php');
        ?>
    </div>
</body>
</html>