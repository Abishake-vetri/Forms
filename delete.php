<?php 
       $title="Delete";
       require_once 'db/conn.php';
        
       if(isset($_GET['id'])){
           $id = $_GET['id'];
           $res = $crud->deleteAttendee($id);
       }
       if($res){
           header("Location:viewrecords.php");
       }
       ?>