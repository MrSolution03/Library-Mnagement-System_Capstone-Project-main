﻿<?php
require 'dbconn.php';
?>

<?php
if ($_SESSION['RollNo']) {
    ?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylePan.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
  </head>
  <body>
<?php
$rollno = $_SESSION['RollNo'];
    $sql = "select * from LMS.user where RollNo='$rollno' AND Type='Student'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $name = $row['Name'];
    $category = $row['Department'];
    $email = $row['EmailId'];
    $mobno = $row['MobNo'];
    $pswd = $row['Password'];
    ?>
    <div class="containr">
    <div class="container-aside">
      <section class="aside">
        <div class="aside-top">
           <img src="images/icons8_library_100px.png">
           <P>Library management system</P>
           <p style="border:1px solid #cacdcf">Student Panel</p>
        </div>
        <div class="aside-bottom">
          <div class="dashboard item">

            <a href="index.php" class="dash link"><i class="fa fa-tachometer" aria-hidden="true"></i> DashBoard</a>
          </div>

        <div class="req item">

          <a href="message.php" class="request link"><i class="fa fa-comment" aria-hidden="true"></i> Messages</a>
        </div>
        <div class="req item">

          <a href="book.php" class="request link"><i class="fa fa-book" aria-hidden="true"></i> All Books</a>
        </div>

        <div class="req item">

          <a href="history.php" class="request link"><i class="fa fa-book" aria-hidden="true"></i> Previously Borrowed Books</a>
        </div>
        <div class="req item">

          <a href="recommendations.php" class="request link"><i class="fa fa-commenting-o" aria-hidden="true"></i> Recomands book</a>
        </div>

        <div class="message item">

          <a href="current.php" class="message msg link"><i class="fa fa-book" aria-hidden="true"></i> Currently Issued Books</a>
        </div>
        <div class="message item">

          <a href="myDetails.php" class="message msg link"><i class="fa fa-book" aria-hidden="true"></i> My Profile</a>
        </div>
        <div class="message item">

          <a href="reportBug.php" class="message msg link"><i class="fa fa-book" aria-hidden="true"></i> Report bug</a>
        </div>
        <div class="logout" style="margin-top:100px;margin-left: auto;margin-right: auto;text-align: center;">
          <a href="logout.php" class="lgout link"><i style="color:rgb(214, 15, 15);"class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </div>
        </div>

    </section>
    </div>
    <div class="container-main">
      <section class="nav">
        <div class="menu-btn">
          <button onclick="menu_collapse()" class="menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
        </div>

        <!-- <div > -->
          <p style="font-size:18px">
          <span class="time"></span>,

          <span class="date"></span>
          </p>
      <!-- </div> -->
          <div class="profile">
          <span>Student Name: <?php echo $name ?><b></span><span id="separator"> &nbsp;  &nbsp; | &nbsp;  &nbsp; </span></b>
          <span>Student Num: <?php echo $rollno ?></span>
             <!-- <button onclick="show()" class="profile_btn">profile</button>
             <div class="list_drp" style="z-index: 1000000;">
                <a href="#">account</a>
                <a href="#">logout</a>
             </div> -->

          </div>
      </section>
<?Php
$rollno = $_SESSION['RollNo'];
    $sql = "select * from LMS.record,LMS.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NOT NULL and book.Bookid = record.BookId";
    $result = $conn->query($sql);

    $rows_count_value = mysqli_num_rows($result);

    ?>

<?php
$rollno = $_SESSION['RollNo'];
    $sql1 = "select * from LMS.record,LMS.book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId";
    $result1 = $conn->query($sql1);

    $rows_count_value1 = mysqli_num_rows($result1);

    ?>

<?php
$rollno = $_SESSION['RollNo'];
    $sql2 = "select * from LMS.message where RollNo = '$rollno'";
    $result2 = $conn->query($sql2);

    $rows_count_value2 = mysqli_num_rows($result2);

    ?>



      <section class="main-contnt">
           <div class="dashboard">
            <div class="container-dashboard">
              <div class="box b_two">
                <i class="fa fa-book" aria-hidden="true"></i>
                <p>Curently Issued: <span><?php echo $rows_count_value1; ?></span></p>
              </div>
              <div class="box b_one">
                <i class="fa fa-history" aria-hidden="true"></i>
                <p>Previously Booked: <span><?php echo $rows_count_value; ?></span></p>
              </div>
              <div class="box b_four">
              <i class="fa fa-comment" aria-hidden="true"></i>
                <p>Message: <span><?php echo $rows_count_value2; ?></span></p>

              </div>
            </div>
            <div class="animation">
              <div class="com">
                  <h1>Library Management System</h1>
                  <p>“By reeducating the mind, you can accept fear as simply a fact of life rather than a barrier to success.”</p>
              </div>
            </div>
           </div>



      </section>
    </div>
    </div>
    <script src="scripts/script.js"></script>
    <script src="scripts/page_load.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script>
               const time = document.querySelector('.time');
               const d = document.querySelector('.date');

               function currentTime() {
  let date = new Date(); /* creating object of Date class */
  let hour = date.getHours();
  let min = date.getMinutes();
  let sec = date.getSeconds ();
  hour = updateTime(hour);
  min = updateTime (min);
  sec = updateTime(sec);

  if(hour>12 && min===00){
    time.innerText = hour + " : " + min + " : " + sec + " am" +", "; /* adding time to the div */

  }else{
    time.innerText = hour + " : " + min + " : " + sec + " pm"; /* adding time to the div */
  }



  let day = date.getDate();
  let mon = date.getMonth();
  let year = date.getFullYear();


  const months=["January","February","March","April","May","June","July","August","September","October","November","December"];
  let index = 0;

  let myDate = year+'-'+months[mon]+'-'+day;
  d.innerHTML=myDate;

  var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
}

function updateTime(k) {
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime();
          </script>


  </body>
</html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
}?>