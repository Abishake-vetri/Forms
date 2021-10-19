<?php include 'Includes/session.php'; 

    session_destroy();
    unset($_SESSION['id']);
    header("Location:index.php");

?>

