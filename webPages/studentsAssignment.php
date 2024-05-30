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

// filters
$studentID = isset($_GET['student_id']) ? $_GET['student_id'] : '';
$hasAdvisor = isset($_GET['hasAdvisor']) ? $_GET['hasAdvisor'] : '';

use webPages\models\Firestore;

$f = new Firestore();
$collection = $f->setCollectionName('academic_advisors');
// Retrieve all advisor documents
$advisors = $collection->getAllDocuments();
$firestore = new FirestoreClient([
    'projectId' => $projectId,
    'databaseId' => $databaseId,
]);

$all_students = $firestore->collection('students');

if (!empty($studentID)) {
    $all_students = $all_students->where('id', '=', $studentID);
}

$students = $all_students->documents();



// Query the Firestore collection for all documents
$all_documents = $firestore->collection('students')->documents();


?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    

    <link rel="stylesheet" type="text/css" href="shared.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    


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


        <div class="warper" style="height: 110%;">

            <h1> إسناد الطالبات </h1>
            <br>

            <div class="continer" >
                <div class="forms">
                    
                
                    <div class="searchDiv2">
                            <input type="text" class="student_id" name="student_id" value="<?php echo $studentID; ?>" id="searchInput2" placeholder="بحث بالرقم الجامعي">&nbsp;<i class="fa fa-search" aria-hidden="true" style="color:#375E98;"></i></input>
                    </div>
                    <br> <br>
                    <div class="searchDiv2">
    <br>
    <select name="hasAdvisor" id="filterHasAdvisor">
        <option value="" > الكل </option>
        <option value="true" <?php if ($hasAdvisor == 'true') { echo 'selected'; } ?>>عدم وجود مرشدة</option>
    </select>
                        </form>
                    </div>
                    <br>
                    <div class="student-id-error" style="color: red; display: none;">الرجاء إدخال رقم جامعي صحيح مكوّن من ثمانية أرقام</div>
                

                <?php
                $count=0;
                $successMessage=  "";
                    // Check if the form is submitted
                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    //Retrieve the selected option from the dropdown
                    $selectedOption = isset($_POST["selectedOption"]) ? $_POST["selectedOption"] : '';
                    $hasAdvisor = isset($_POST["hasAdvisor"]) ? $_POST["hasAdvisor"] : '';

    // Retrieve the chosen items from the checklist
    $chosenChecklistItems = isset($_POST["checklist"]) ? $_POST["checklist"] : array();

    // Process the values
    $advisorUID = "";
    $successMessage = "لم يتم الإسناد, الرجاء المحاولة مرة أخرى";
    foreach ($advisors as $advisor) {
        if ($advisor['name'] == $selectedOption) {
            $advisorUID = $advisor['uid'];
        
        $count2 =0;
        foreach ($chosenChecklistItems as $student1) {
            $count2 = $count2+1;
            $not = 0;
            foreach ($all_documents as $document) {
                $not = $not+1;
                if ( $document['name'] == $student1) {
                    $count = $count + 1;
                    $successMessage = 'تمت إسناد  '.$count.'  طالبة بنجاح';

                    $documentId = $document->id();
                    $documentRef = $firestore->collection("students")->document($documentId);
                    $documentRef->update([
                        ['path' => 'AdvisorUID', 'value' => $advisorUID]
                    ]);

                    $change = "تم تغيير مرشدتك إلى ".$advisor['name'];
                    $specificNotificationCollection = $firestore->collection('specific_notification');
                    $specificNotificationData = [
                        'date' => new \Google\Cloud\Core\Timestamp(new \DateTime()),
                        'title' => 'تغيير المرشدة الأكاديمية',
                        'message' => $change ,
                        'uid' => $document['uid']
                    ];
                    $specificNotificationCollection->add($specificNotificationData);

                }
                
            }
            
        }
    }
    }

    $_SESSION['successMessage'] = $successMessage;
    // Redirect to the same page after form submission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$successMessage = isset($_SESSION['successMessage']) ? $_SESSION['successMessage'] : '';

// Clear the session variable
unset($_SESSION['successMessage']);
?>
                
                <br>
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



                
            </div>

        

        
        <br>


            
    
        <div class="f2">

        
            <table id="testinggg" style="width: 450px;">
                <tr>
                    <th style="width:200px;">الاسم</th>
                    <th style="width:100px">الرقم الجامعي</th>
                    <th style="width:150px">المرشدة الأكاديمية</th>
                    <th style="width:50px;">اختيار</th>
                </tr>
                <tbody id="dataBody">
                <?php
                    //get all student info
                    foreach ($students as $student) {
                        if ($student['AdvisorUID']  && $hasAdvisor == 'true') {
                            continue;
                        }
   

                        echo '<tr>';
                        echo '<td>' . $student['name'] . "</td>";
                        echo '<td>' . $student['id'] . "</td>";
                        $adv="";
                        foreach ($advisors as $advisor){
                            if($student["AdvisorUID"]== $advisor["uid"]){
                                $adv = $advisor["name"];
                            } 
                        }
                        echo '<td>' .$adv. "</td>";
                        echo '<td> <div class="checkboxContainer"> <label> <input type="checkbox" name="checklist[]" value="'.$student['name'].'"></label></div> '. "</td>";
                        echo "</tr>";
                        
                    }
                    ?>
                </tbody>
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
        // Call the function to show the success message
        showSuccessMessage();

        function showSuccessMessage() {
            const successMessage = "<?php echo $successMessage; ?>";

            if ( successMessage != "لم يتم الإسناد, الرجاء المحاولة مرة أخرى") {
            const successTextElement = document.getElementById("successmessage");
            const successMessageContainer = document.getElementById("show1");

            if (successMessage) {
                successTextElement.innerText = successMessage;
                successMessageContainer.style.display = "block";
            }
        } else {
            const errorTextElement = document.getElementById("errormessage");
            const errorMessageContainer = document.getElementById("show");

            if (successMessage) {
                errorTextElement.innerText = successMessage;
                errorMessageContainer.style.display = "block";
            }
        }
        }
        </script>
        
        <?php
        include('nav.php');
        ?>
    </div>
        <script>
        $(document).ready(function() {

            let timer;
            $('#searchInput2').change(function() {
                clearTimeout(timer);
                timer = setTimeout(function() {
                    search();
                }, 500);
            });

            $('#filterHasAdvisor').change(function() {
                search();
            });
                
        });

        function search() {
            $('button').attr('disabled', true);
    var studentId = $('.student_id').val();

    // Validate the student_id input
    if (studentId.length === 0) {
        $('.student-id-error').hide();
        showAllRows();
    } else if (!/^\d{9}$/.test(studentId)) {
        $('.student-id-error').show();
    } else {
        $('.student-id-error').hide();

        var data = {
            student_id: studentId,
            hasAdvisor: $('#filterHasAdvisor').val()
        };

        $.ajax({
            url: '<?php echo $_SERVER['PHP_SELF']; ?>',
            method: 'GET',
            data: data,
            success: function(response) {
                if (response != null) {
                    $('body').html(response);
                }
            },
            complete: function(response) {
                $('button').attr('disabled', false);
            }
        });
    }
        }

        function showAllRows() {
    $.ajax({
        url: '<?php echo $_SERVER['PHP_SELF']; ?>',
        method: 'GET',
        data: {
            showAll: true
        },
        success: function(response) {
            if (response != null) {
                $('body').html(response);
            }
        },
        complete: function(response) {
            $('button').attr('disabled', false);
        }
    });
}
    </script>
</body>

</html>