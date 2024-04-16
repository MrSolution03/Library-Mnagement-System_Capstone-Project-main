<?php

include 'dbconn.php';

$userid = $_GET['id'];

$sql1 = "delete from LMS.user where RollNo='$userid'";

if ($conn->query($sql1) == true) {

    echo "<script type='text/javascript'>alert('Success')</script>";
    echo '$id';

    header("Refresh:0.01; url=student.php", true, 303);
} else { //echo $conn->error;
    echo "<script type='text/javascript'>alert('Error')</script>";
}
