<?php


?>
       <div class="vertical-menu">
            <a <?php if($_SESSION['page']=='home.php') { ?> class="active" <?php   }  ?> href="home.php">الرئيسية</a>
            <a <?php if($_SESSION['page']=='addStudent.php'){ ?> class="active"<?php   }  ?> href="addStudent.php">إضافة الطالبات</a>
            <a <?php if($_SESSION['page']=='addAdvisors.php'){ ?> class="active"<?php   }  ?> href="addAdvisors.php">إضافة المرشدات الأكاديميات</a>
            <a <?php if($_SESSION['page']=='students.php'){ ?> class="active"<?php   }  ?>href="students.php">عرض الطالبات</a>
            <a <?php if($_SESSION['page']=='advisors.php'){ ?> class="active"<?php   }  ?>href="advisors.php"> عرض المرشدات</a>
            <a href="#">إسناد الطالبات</a>
            <a href="#">الخطط الدراسية</a>
            <a href="#">المواعيد المهمة</a>
            
        </div>