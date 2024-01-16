<?php


?>
<div class="vertical-menu">
    <a <?php if ($_SESSION['page'] == 'home.php') { ?> class="active" <?php   }  ?> href="home.php">الرئيسية</a>
    <a <?php if ($_SESSION['page'] == 'addStudent.php') { ?> class="active" <?php   }  ?> href="addStudent.php">إضافة الطالبات</a>
    <a <?php if ($_SESSION['page'] == 'addAdvisors.php') { ?> class="active" <?php   }  ?> href="addAdvisors.php">إضافة المرشدات الأكاديميات</a>
    <a <?php if ($_SESSION['page'] == 'students.php') { ?> class="active" <?php   }  ?>href="students.php">عرض الطالبات</a>
    <a <?php if ($_SESSION['page'] == 'advisors.php') { ?> class="active" <?php   }  ?>href="advisors.php"> عرض المرشدات</a>
    <a <?php if ($_SESSION['page'] == 'studentsAssignment.php') { ?> class="active" <?php   }  ?>href="studentsAssignment.php"> إسناد الطالبات</a>
    <a <?php if ($_SESSION['page'] == 'academicForms.php') { ?> class="active" <?php   }  ?>href="academicForms.php"> النماذج الأكاديمية</a>
    <a <?php if ($_SESSION['page'] == 'plans.php') { ?> class="active" <?php   }  ?>href="plans.php">الخطط الدراسية</a>
    <a <?php if ($_SESSION['page'] == 'studentsDelete.php') { ?> class="active" <?php   }  ?>href="studentsDelete.php"> حذف الطالبات </a>
    <a <?php if ($_SESSION['page'] == 'advisorsDelete.php') { ?> class="active" <?php   }  ?>href="advisorsDelete.php"> حذف المرشدات الأكاديميات</a>
    <a <?php if ($_SESSION['page'] == 'importantDates.php') { ?> class="active" <?php   }  ?>href="importantDates.php">   المواعيد المهمة</a>



</div>