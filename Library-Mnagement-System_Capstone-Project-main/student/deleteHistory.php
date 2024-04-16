<?php

include 'dbconn.php';

$reportid = $_GET['id'];

$sql1 = "delete from LMS.record where BookId='$reportid'";

if ($conn->query($sql1) == true) {

    echo "<script type='text/javascript'>alert('Success')</script>";
    header("Refresh:0.01; url=History.php");

} else { //echo $conn->error;

    echo "<script type='text/javascript'>alert('Error')</script>";
    // header("Refresh:0.01; url=deleteHistory.php", true, 303);
}
