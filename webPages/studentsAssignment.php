<?php session_start();
$_SESSION['page'] = 'studentsAssignment.php';
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
$collection = $f->setCollectionName('academic_advisors');
//retrive all advisors documents
$advisors = $collection->getAllDocuments();

$collection1 = $f->setCollectionName('students');
$students = $collection1->getAllDocuments();

$firestore = new FirestoreClient([
    'projectId' => $projectId,
    'databaseId' => $databaseId,
]);
$documents = $firestore->collection("students")->documents();
?>

<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="shared.css">
    

    <title>إسناد الطالبات</title>
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

            <h1> إسناد الطالبات </h1>
            <br>

            <div class="continer" >
                <div class="forms">
                    

                <?php
                $count=0;
                $successMessage=  "";
                    // Check if the form is submitted
                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    //Retrieve the selected option from the dropdown
                    $selectedOption = isset($_POST["selectedOption"]) ? $_POST["selectedOption"] : '';

                    //Retrieve the chosen items from the checklist
                    $chosenChecklistItems = isset($_POST["checklist"]) ? $_POST["checklist"] : array();

                    //Process the values
                    //echo "Selected Option: " . $selectedOption . "<br>";
                    //echo "Chosen Checklist Items: " . implode(", ", $chosenChecklistItems);
                    $advisorUID = "";
                    $successMessage = "لم يتم الإسناد, الرجاء المحاولة مرة أخرى";
                    foreach ($advisors as $advisor) {
                       if ($advisor['name'] == $selectedOption){
                           $advisorUID = $advisor['uid'];
                        }
                        foreach ($chosenChecklistItems as $student1) {
                          foreach ($documents as $document){
                            if ( $student1 == $document['name']){
                                $count=$count+1;
                                $successMessage = "تم إسناد الطالبات بنجاح";
                                
                                $documentId = $document->id();
                                $documentRef = $firestore->collection("students")->document($documentId);
                                $documentRef->update([
                                   ['path' => 'AdvisorUID', 'value' => $advisorUID]
                                ]);
                            }
                          }
                        }
                    };

                    }
                ?>
                
            <div class="error-message" id="show">
                <span class="error-text" id="errormessage">
                </span>
            </div>
            <div class="success-message" id="show1">
                <span class="success-text" id="successmessage">
                </span>
            </div>

            <form id="myForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="f1">
                <div class="dropdown-container">
                <label for="options">: اختيار مرشدة  -</label>
                <br>
                <select id="options" class="dropdown" name="selectedOption">
                <?php
                foreach ($advisors as $advisor) {
                    echo '<option>'.$advisor['name'].'</option>';
                }
                ?>
                </select>
            </div>

            

            <br>
            <label>: اختيار طالبات  -</label>
            <br>
        </div>



            
    
        <div class="f2">
            <table style="width: 450px;">
                <tr>
                    <th style="width:200px;">الاسم</th>
                    <th style="width:50px;">اختيار</th>
                </tr>
                <?php
                    //get all student info
                    foreach ($students as $student) {
                        echo '<tr>';
                        echo '<td>' . $student['name'] . "</td>";
                        echo '<td> <div class="checkboxContainer"> <label> <input type="checkbox" name="checklist[]" value="'.$student['name'].'"></label></div> '. "</td>";
                        echo "</tr>";
                        
                    }
                    ?>
            </table>
            <br>
            <div class="buttonContainer">
        <input class="button-1" type="submit" value="إسناد">
                </div>
        <br>
                </div>
                
        </form>
        
                </div>


                
        

            </div>
        </div>
        <script>
            function showSuccessMessage() {
                const successMessage = "<?php  echo $successMessage; ?>";
                
                const successTextElement = document.getElementById("<?php if ( $count > 0 ){ echo 'successmessage'; }  else {  echo 'errormessage'; }?>");

                if (successMessage) {
                    successTextElement.innerText = successMessage;

                    document.getElementById("<?php if ( $count > 0 ){ echo 'show1'; }  else {  echo 'show'; }?>").style.display = "block";
                }
            }

    // Call the function to show the success message
    showSuccessMessage();

        </script>
        
        <?php
        include('nav.php');
        ?>
    </div>
</body>

</html>