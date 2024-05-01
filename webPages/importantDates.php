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
                        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['title'])) {
                            $title2 = $_POST['title'];
                            // Retrieve the selected date
                            $selectedDate = isset($_POST["selectedDate"]) ? $_POST["selectedDate"] : '';
                            $title = isset($_POST["title"]) ? $_POST["title"] : '';

                            $data = [
                                'Date' => "$selectedDate",
                                'title' => "$title2",
                            ];

                            $collection = $firestore->collection('ImportantDate');
                            $collection3 = $firestore->collection('ImportantDate')
                            ->where('title', '=', $data['title'])
                            ->limit(1);
                            $snapshot = $collection3->documents();
                            foreach ($snapshot as $document) {
                                $documentId = $document->id();

                                $docRef = $firestore->collection('ImportantDate')->document($documentId);
                                $docRef->set($data, ['merge' => true]);
                            }
                            $added=1;

                            
                            $Date = $collection2->getAllDocuments();

                        }

                        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['newTitle'])) {
                            $newTitle = $_POST['newTitle'];
                            $newDate = $_POST['newDate'];
                        
                            $data3 = [
                                'Date' => $newDate,
                                'title' => $newTitle,
                            ];
                            $collection = $firestore->collection('ImportantDate');
                            $collection->add($data3);
                            $added = 1;
                        
                            // Refresh the collection data
                            $Date = $collection2->getAllDocuments();
                        }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

                
                                <div class="forms">

                
                                <table>
                   

                    <!-- retrive from DB all Date info -->
                    <?php 

                    foreach ($Date as $date) : ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <tr>
                <td style="width:350px;"><?= $date['title'] ?></td>
                <input type="hidden" name="title" value="<?= $date['title'] ?>">
                <td style="width:200px;"><?= $date['Date'] ?></td>
                <td style="width:200px;"><input type="date" id="selectedDate" name="selectedDate" lang="ar" required></td>
                <td style="width:150px;"><div class="buttonContainer">
                        <button type="submit" class="button-1">إضافة</button>
                    </div>
                </td>
            </tr>

            
            </form>
            
        <?php endforeach; ?>

                </table>
                
                <br>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row">
                    <div class="NewDate">
                        <input type="text" id="newTitle" name="newTitle" placeholder="العنوان" required>
                    </div>
                    <div class="d1"><input type="date" name="newDate" lang="ar" required></div>
                    <div><button id="addDate" type="submit"><i class="fas fa-plus"></i></button> </div>
                    </div>
                </form>
                

                
                <br>
                <div class="success-message" id="show1">
                    <span class="success-text" id="successmessage">
                    </span>
                </div>
                <br>

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
                                var messageFromPHP1 = "تمت إضافة/تحديث التاريخ بنجاح";
                                document.getElementById("successmessage").innerHTML = "<p>" + messageFromPHP1 + "</p>";
                                <?PHP
                                    };
                                    ?>
                            </script>


</body>

</html>