<?php
$title = 'View_Records';
require 'Includes/header.php';
require_once 'db/conn.php';
?>

 <?php  
     $result = $crud->getAttendee();
 ?>
<table class="table">
    <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>Date-of-Birth</th>
        <th>Phone number</th>
        <th>e-mail</th>
        <th>Password</th>
        <th>Department</th>
        <th>view</th>
    
    </tr>
     <?php  while($r = $result->fetch(PDO::FETCH_ASSOC))  { ?>
    <tr>
        <td>  <?php echo $r['attendee_id']?></td>
        <td> <?php echo $r['Name']?></td>
        <td> <?php echo $r['DOB']?></td>
        <td> <?php echo $r['Number']?></td>
        <td> <?php echo $r['Email']?></td>
        <td><?php echo $r['Password']?></td>
        <td><?php echo $r['Department']?></td>
        <td><a href="view.php?id= <?php echo $r['attendee_id']?>" class="btn btn-primary">view</a>
        <a href="edit.php?id= <?php echo $r['attendee_id']?>" class="btn btn-warning">Edit</a>
        <a href="delete.php?id= <?php echo $r['attendee_id']?>" class="btn btn-danger" onclick="confirm('Do you really want to delete this record?');">Delete</a>


        
    </tr>




    <?php }?>
</table>











<?php require 'Includes/footer.php'; ?>