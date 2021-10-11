<?php
include 'Includes/session.php'
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <title>Attendance-<?php echo $title ?></title>
</head>

<body style="background-color: skyblue;">
  <div class="container"></br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="navbar-nav mr-auto " id="navbarNav">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link active" href="viewrecords.php" >viewrecords</a>
        </div>

        <div class="navbar-nav ml-auto " id="navbarNav">
              <a class="nav-link active" aria-current="page" href="login.php">login</a>
        </div>
      </div>
    </nav></br>