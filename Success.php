<?php
$title = 'Success';
require 'Includes/header.php';
require 'db/conn.php';
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $Dob = $_POST['DOB'];
    $number = $_POST['Number'];
    $email = $_POST['exampleInputEmail1'];
    $password =  $_POST['exampleInputPassword1'];
    $department = $_POST['dept'];

    $issuccess = $crud->insert($name, $Dob, $number, $email, $password, $department);
}
if ($issuccess) {
    echo '<h1 class="text-center text-success" class="fw-bolder">' . "Your details are Saved!" . "</h1>";
} else {
    echo '<h1 class="text-center text-danger" class="fw-bolder">' . "Your responses has been failed" . "</h1>";
}
?>
<!-- 
<div class="card" style="width: 18rem;">
    <img src="Attendance/Abishake_profile_pic.png" class="card-img-top" alt="profile">
    <div class="card-body">
        <p class="card-text">Name: <?php echo $_POST['Name']  ?></p>
        <p class="card-text">DOB: <?php echo $_POST['DOB']  ?></p>
        <p class="card-text">Phone: <?php echo $_POST['Number']  ?></p>
        <p class="card-text">Email: <?php echo $_POST['exampleInputEmail1']  ?></p>
        <p class="card-text">Dept: <?php echo $_POST['dept']  ?></p>
        <p class="card-text">Password: <?php echo $_POST['exampleInputPassword1']  ?></p>
    </div>
</div>
 -->

<!-- 
echo $_GET['Name'] . '</br>';
echo $_GET['exampleInputEmail1'] . '</br>';
echo $_GET['dept']; -->


<?php require 'Includes/footer.php'; ?>