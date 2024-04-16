<?php

include 'dbconn.php';

$bookid = $_GET['id'];

$sql1 = "delete from LMS.book where bookid='$bookid'";

if ($conn->query($sql1) == true) {

    echo "<script type='text/javascript'>alert('Success')</script>";
    header("Refresh:0.01; url=book.php", true, 303);
} else { //echo $conn->error;
    echo "<script type='text/javascript'>alert('Error')</script>";
}
