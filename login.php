<?php
$title = 'login';
require 'Includes/header.php';
include 'db/conn.php';




if($_SERVER['REQUEST_METHOD'] =='POST'){
    $username= strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_password = md5($password,$username);
    $result = $users->getUser($username,$new_password);
    if($result){
        echo "<div class ='alert alert-danger'>Username or Password is incorrect.</div>";
    }else{
        $_SESSION['username']=$username;
        $_SESSION['id']=$result['id'];
        header("Location:viewrecords.php");
    }
}

?>  
  <h1 style="text-align: center;">USER LOGIN</h1>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <div class="mb-3">
 <label for="username">Username</label>
 <input type="text" id="username" name="username" class="form-control" value="<?php if($_SERVER['REQUEST_METHOD'] =='POST') echo $_POST['username'];?>">
  </div>
  <div class="mb-3">
 <label for="pass">Password</label>
 <input type="password" id="pass" name="password" class="form-control">
  </div>
  <input type="submit" value="Login" class="btn btn-success"></br>
</br>
  <a href="#">forgot password?</a>
  </form>