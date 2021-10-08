<?php 
       require_once 'db/conn.php';

      if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $name = $_POST['Name'];
        $Dob = $_POST['DOB'];
        $number = $_POST['Number'];
        $email = $_POST['exampleInputEmail1'];
        $password =  $_POST['exampleInputPassword1'];
        $department = $_POST['dept'];
      }    
       $res = $crud->editAttendee($id, $name,$Dob, $number,$email,$password,$department);

       if($res){
           header("Location:viewrecords.php");
       }
  ?>