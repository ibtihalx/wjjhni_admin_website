<?php session_start();
$_SESSION['page'] = 'importantDates.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}

include '../dbcon.php';
use Google\Cloud\Firestore\FirestoreClient;
use webPages\models\Firestore;

putenv('models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json');
$projectId = 'wjjhni';
$databaseId = '(default)';

$firestore = new FirestoreClient([
    'projectId' => $projectId,
    'databaseId' => $databaseId,
]);

$f = new Firestore();
$collection2 = $f->setCollectionName('ImportantDate');
//retrive all advisors documents
$Date = $collection2->getAllDocuments();

$added=0;
                        if ($_SERVER["REQUEST_METHOD"] === "POST") {
                            // Retrieve the selected date
                            $selectedDate = isset($_POST["selectedDate"]) ? $_POST["selectedDate"] : '';
                            $title = isset($_POST["title"]) ? $_POST["title"] : '';

                            $data = [
                                'Date' => "$selectedDate",
                                'title' => "$title",
                            ];
                            $collection = $firestore->collection('ImportantDate');
                            $newDocument = $collection->add($data);
                            $added=1;

                            $Date = $collection2->getAllDocuments();

                        }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">

    <title> المواعيد المهمة</title>
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

            <h1>  المواعيد المهمة </h1>
            <br>

            <div class="continer">

            <div class="testing">
            <div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label style="font-size:large;" for="selectedDate">:التاريخ</label>
                    <input type="date" id="selectedDate" name="selectedDate" lang="ar" required>
                    <br><br>
                    
                    <label style="font-size:large;"for="title">:العنوان</label>
                    <div class="Title"><input type="text" id="title" name="title" required dir="rtl" placeholder="العنوان"></div>
                    <br><br>


                    <div class="buttonContainer">
                        <button type="submit" class="button-1">إضافة</button>
                    </div>
                    <br>
                    <div class="buttonContainer">
                    <div class="success-message" id="show1">
                        <span class="success-text" id="successmessage">
                        </span>
                    </div>
                    </div>
                    <br>
                    
                    
                

                </form>

                
                            
                            </div>
                                

                    
                            
                
                                <div>
                                <table>
                    <tr>
                        <th style="width:300px;">
                            العنوان
                        </th>
                        <th style="width:200px;">
                            التاريخ
                        </th>
                    </tr>

                    <!-- retrive from DB all Date info -->
                    <?php foreach ($Date as $date) : ?>
            <tr>
                <td><?= $date['title'] ?></td>
                <td><?= $date['Date'] ?></td>
            </tr>
        <?php endforeach; ?>

                </table>
                </div>
                </div>


            </div>

                


        </div>

        <?php
        include('nav.php');
        ?>
    </div>

    <script>
                                <?PHP
                                    if ($added == 1) {
                                        ?>
                                var messageFromPHP1 = "تمت إضافة التاريخ بنجاح";
                                document.getElementById("successmessage").innerHTML = "<p>" + messageFromPHP1 + "</p>";
                                <?PHP
                                    };
                                    ?>
                            </script>


</body>

</html>