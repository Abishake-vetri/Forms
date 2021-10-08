<?php
$title = 'Edit';
require 'Includes/header.php';
require_once 'db/conn.php';
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id);
?>



    <h1 class="text-center" class="fw-bolder">Edit Records</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" value="<?php echo $attendee['attendee_id' ]?>" name="id">
        <div class="mb-3">
            <label for="Name" class="form-label">Enter Name</label>
            <input type="text" class="form-control" id="Name" name="Name" required value="<?php echo $attendee['Name'] ?>">
        </div>
        <div class="mb-3">
            <label for="DOB" class="form-label">Date-Of-Birth</label>
            <input type="text" class="form-control" id="DOB" name="DOB" required value="<?php echo $attendee['DOB'] ?>">
        </div>
        <div class="mb-3">
            <label for="Number" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="Number" name="Number" required value="<?php echo $attendee['Number'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" required value="<?php echo $attendee['Email'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="Password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" required value="<?php echo $attendee['Password'] ?>">
        </div>
        <div class="mb-3">
            <input type="checkbox" onclick="myFunction()">Show Password
            <script>
                function myFunction() {
                    var x = document.getElementById("exampleInputPassword1");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
        </div>
        <div class="mb-3">
            <label for="dept" class="form-label">Choose Your Department</label>
            <select class="form-select" aria-label="Default select example" id="dept" name="dept" value="<?php echo $attendee['Department'] ?>">
                <option selected><?php echo $attendee['Department'] ?></option>
                <option value="CSE">CSE</option>
                <option value="MECH">MECH</option>
                <option value="EEE">EEE</option>
                <option value="ECE">ECE</option>
            </select>
        </div>
     <button type="Submit" name="Submit"  class="btn btn-success">Save changes</button>
<a href="viewrecords.php" class="btn btn-primary">Cancel</a>
    </form>



<?php  }
require 'Includes/footer.php'; ?>