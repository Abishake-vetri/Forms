<?php

class crud
{
    private $db;
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insert($name, $Dob, $number, $email, $password, $department)
    {
        try {
            $sql = "INSERT INTO  attendance(Name,DOB,Number,Email,Password,Department) VALUES(:fname,:dob,:Num,:email,:pass,:department) ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':fname', $name);
            $stmt->bindparam(':dob', $Dob);
            $stmt->bindparam(':Num', $number);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':pass', $password);
            $stmt->bindparam(':department', $department);


            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getAttendee()
    {
        $sql = "SELECT * FROM `attendance`;";
        $result = $this->db->query($sql);
        return $result;
    }

    public function getAttendeeDetails($id)
    {
        $sql = 'select * from `attendance` where attendee_id = :id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function editAttendee($id,$name, $Dob, $number, $email, $password, $department){
        $sql = 'UPDATE `attendance` SET `Name`=:fname,`DOB`=:dob,`Number`=:Num,`Email`=:email,`Password`=:pass,`Department`=:department WHERE attendee_id = :id';
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':fname', $name);
            $stmt->bindparam(':dob', $Dob);
            $stmt->bindparam(':Num', $number);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':pass', $password);
            $stmt->bindparam(':department', $department);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
  public function deleteAttendee($id){
      $sql = "DELETE FROM `attendance` WHERE attendee_id =:id";
      $stmt = $this->db->prepare($sql);
      $stmt->bindparam(':id', $id);
      $stmt->execute();
      return true;
  }
}
