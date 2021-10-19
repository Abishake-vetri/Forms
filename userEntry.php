<?php
$title = 'Home';
require_once 'Includes/header.php';
require_once 'db/conn.php';
?>

<h1 class="text-center" class="fw-bolder">REGISTRATION FORM</h1>

<form method="post" action="Success.php">
    <div class="mb-3">
        <label for="Name" class="form-label">Enter Name</label>
        <input type="text" class="form-control" id="Name" name="Name" required>
    </div>
    <div class="mb-3">
        <label for="DOB" class="form-label">Date-Of-Birth</label>
        <input type="text" class="form-control" id="DOB" name="DOB" required>
    </div>
    <div class="mb-3">
        <label for="Number" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="Number" name="Number" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" required>
    </div>
    <div class="mb-3">
        <label for="dept" class="form-label">Choose Your Department</label>
        <select class="form-select" aria-label="Default select example" id="dept" name="dept">
            <option selected>-select-</option>
            <option value="CSE">CSE</option>
            <option value="MECH">MECH</option>
            <option value="EEE">EEE</option>
            <option value="ECE">ECE</option>
</select>       
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



<?php require 'Includes/footer.php'; ?>