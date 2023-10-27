
<?php
session_start();
$_SESSION['page']='addStudent.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

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
            <div class="continer" >

            <div class="wrap_stu">
                  <header id="stu_header">تحميل الملفات</header>

                <form id="stu_file">
               
                    <p id="file_hint">
                          يجب أن تكون صيغة الملف
                        csv.
                        أو
                        xlsx.
                    </p>


    <input class="file-input" type="file" name="file" hidden>
      <i class="fas fa-cloud-upload-alt"></i>


                </form>


            

            


                
   <section class="progress-area"></section>
    <section class="uploaded-area"></section>


</div>
            </div>

        </div>
  <?php
   
  include("nav.php");
  ?>


    </div>
     <script src="script.js"></script>
</body>


</html>