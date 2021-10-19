<?php
$title = 'ViewDetails';
require 'Includes/header.php';
require_once 'Includes/authenticate.php';

require_once 'db/conn.php';
?> 

<?php  
   if(isset($_GET['id'])){
       $id = $_GET['id'];
       $result = $crud->getAttendeeDetails($id);
   
   
?>
<div class="card" style="width: 18rem;">
     <div class="card-body">
        <p class="card-text">Name: <?php echo $result['Name']  ?></p>
        <p class="card-text">DOB: <?php echo $result['DOB']  ?></p>
        <p class="card-text">Phone: <?php echo $result['Number']  ?></p>
        <p class="card-text">Email: <?php echo $result['Email']  ?></p>
        <p class="card-text">Password: <?php echo $result['Password']  ?></p>
        <p class="card-text">Dept: <?php echo $result['Department']  ?></p>
    </div>
    </div></br>
    <p><a href="viewrecords.php" class="btn btn-primary">Back</a>
        <a href="edit.php?id= <?php echo $result['attendee_id']?>" class="btn btn-warning">Edit</a>
        <a href="delete.php?id= <?php echo $result['attendee_id']?>" class="btn btn-danger" onclick="confirm('Do you really want to delete this record?');">Delete</a>
    </p>
       


<?php } ?>











<?php require 'Includes/footer.php'; ?>