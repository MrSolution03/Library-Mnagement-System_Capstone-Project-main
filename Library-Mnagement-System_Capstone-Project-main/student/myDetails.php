<?php
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
        <p style="font-size:18px">
          <span class="time"></span>,

          <span class="date"></span>
          </p>
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



      <section class="main-content">
      <div class="span9">
                        <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Book Details</h3>
                            </div>
                            <div class="module-body">
                        <?php
$rollno = $_SESSION['RollNo'];
    $sql = "select * from LMS.user where RollNo='$rollno'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $name = $row['Name'];
    $category = $row['Department'];
    $email = $row['EmailId'];
    $type = $row['Type'];
    $mobno = $row['MobNo'];
    $pswd = $row['Password'];

    echo "<b>RollNo:</b> " . $rollno . "<br><br>";
    echo "<b>Name:</b> " . $name . "<br><br>";
    echo "<b>Department:</b> " . $category . "<br><br>";
    echo "<b>email:</b> " . $email . "<br><br>";
    echo "<b>Mobile Num:</b> " . $category . "<br><br>";
    echo "<b>Password:</b> " . $pswd . "<br><br>";

    ?>

                        <a href="index.php" class="btn btn-primary">Go Back</a>
                        <a href="profile.php" class="btn btn-primary">Edit</a>
                               </div>
                           </div>
                            </div>
                    <!--/.span3-->
                    <!--/.span9-->

                    <!--/.span3-->
                    <!--/.span9-->
                </div>



      </section>
    </div>
    </div>
    <script src="scripts/script.js"></script>
    <script src="scripts/page_load.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


  </body>
</html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
}?>