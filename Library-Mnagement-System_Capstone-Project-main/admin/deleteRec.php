<?php

include 'dbconn.php';

$reportid = $_GET['id'];

$sql1 = "delete from LMS.recommendations where R_ID='$reportid'";

if ($conn->query($sql1) == true) {

    echo "<script type='text/javascript'>alert('Success')</script>";
    header("Refresh:0.01; url=recommendations.php");

} else { //echo $conn->error;
    echo "<script type='text/javascript'>alert('Error')</script>";
}
