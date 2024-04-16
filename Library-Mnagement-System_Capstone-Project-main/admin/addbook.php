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
  <?php
$rollno = $_SESSION['RollNo'];
    $sql = "select * from LMS.user where RollNo='$rollno' AND Type='Admin'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $name = $row['Name'];
    $category = $row['Department'];
    $email = $row['EmailId'];
    $mobno = $row['MobNo'];
    $pswd = $row['Password'];
    ?>

<?php
$rollno = $_SESSION['RollNo'];
    $query = "select count(Msg) as sum from LMS.message where RollNo='$rollno'";
    $result_m = mysqli_query($conn, $query);
    $row5 = mysqli_fetch_assoc($result_m);
    $sum5 = $row5['sum'];

    // $id_m = $row['M_Id'];
    // $rolllno_m = $row['RollNo'];
    // $messge_m = $row['Msg'];
    // $date_m = $row['Date'];
    // $time_m = $row['Time'];
    ?>

<?php
$rollno = $_SESSION['RollNo'];
    $query1 = "select count(Book_Name) as sum from LMS.recommendations";
    $result_r = mysqli_query($conn, $query1);
    $row6 = mysqli_fetch_assoc($result_r);
    $sum6 = $row6['sum'];

    // $id_m = $row['M_Id'];
    // $rolllno_m = $row['RollNo'];
    // $messge_m = $row['Msg'];
    // $date_m = $row['Date'];
    // $time_m = $row['Time'];
    ?>

<?php
$rollno = $_SESSION['RollNo'];
    $query2 = "select count(Description) as sum from LMS.reportbug";
    $result_rr = mysqli_query($conn, $query2);
    $row7 = mysqli_fetch_assoc($result_rr);
    $sum7 = $row7['sum'];

    // $id_m = $row['M_Id'];
    // $rolllno_m = $row['RollNo'];
    // $messge_m = $row['Msg'];
    // $date_m = $row['Date'];
    // $time_m = $row['Time'];
    ?>
    <div class="containr">
    <div class="container-aside">
      <section class="aside">
      <div class="aside-top">
           <img src="images/icons8_library_100px.png">
           <P>Library management system</P>
           <p style="border:1px solid #cacdcf">Admin Panel</p>
        </div>
        <div class="aside-bottom">
          <div class="dashboard item">

            <a href="index.php" class="dash link"><i class="fa fa-tachometer" aria-hidden="true"></i> DashBoard</a>
          </div>

        <div class="req item">

          <a href="message.php" class="request link"><i class="fa fa-comment" aria-hidden="true"></i> Messages &nbsp;&nbsp;</a>
        </div>
        <div class="req item">

          <a href="student.php" class="request link"><i class="fa fa-user-o" aria-hidden="true"></i> Manage Student</a>
        </div>
        <div class="req item">

          <a href="book.php" class="request link"><i class="fa fa-book" aria-hidden="true"></i> All Books</a>
        </div>

        <div class="req item">

          <a href="requests.php" class="request link"><i class="fa fa-book" aria-hidden="true"></i> Issue/Return Book</a>
        </div>
        <div class="req item">

          <a href="recommendations.php" class="request link"><i class="fa fa-commenting-o" aria-hidden="true"></i> Book Recomandation <span style="color:red"><?php echo $sum6; ?></span></a>
        </div>
        <div class="req item">

          <a href="reportBug.php" class="request link"><i class="fa fa-commenting-o" aria-hidden="true"></i> Bug Repory from Student &nbsp; <span style="color:red"><?php echo $sum7; ?></span></a>
        </div>

        <div class="message item">

          <a href="current.php" class="message msg link"><i class="fa fa-book" aria-hidden="true"></i> Currently Issued Books</a>
        </div>
        <div class="message item">

          <a href="print.php" class="message msg link"><i class="fa fa-book" aria-hidden="true"></i> Print Record</a>
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
          <span>Admin Name: <?php echo $name ?><b></span><span id="separator"> &nbsp;  &nbsp; | &nbsp;  &nbsp; </span></b>
          <span>Admin Num: <?php echo $rollno ?></span>
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
                                <h3>Add Book</h3>
                            </div>
                            <div class="module-body">


                                    <br >

                                    <form class="form-horizontal row-fluid" action="addbook.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Title"><b>Book Title</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Title" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Author"><b>Author</b></label>
                                            <div class="controls">
                                                <input type="text" id="author1" name="author1" class="span8" required>
                                                <input type="text" id="author2" name="author2" class="span8">
                                                <input type="text" id="author3" name="author3" class="span8">

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Publisher"><b>Publisher</b></label>
                                            <div class="controls">
                                                <input type="text" id="publisher" name="publisher" placeholder="Publisher" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Year"><b>Year</b></label>
                                            <div class="controls">
                                                <input type="text" id="year" name="year" placeholder="Year" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Availability"><b>Number of Copies</b></label>
                                            <div class="controls">
                                                <input type="text" id="availability" name="availability" placeholder="Number of Copies" class="span8" required>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Add Book</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>



                    </div><!--/.content-->

      </section>
    </div>
    </div>
    <script src="scripts/script.js"></script>
    <script src="scripts/page_load.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <?php
if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $author1 = $_POST['author1'];
        $author2 = $_POST['author2'];
        $author3 = $_POST['author3'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];
        $availability = $_POST['availability'];

        $sql1 = "insert into LMS.book (Title,Publisher,Year,Availability) values ('$title','$publisher','$year','$availability')";

        if ($conn->query($sql1) === true) {
            $sql2 = "select max(BookId) as x from LMS.book";
            $result = $conn->query($sql2);
            $row = $result->fetch_assoc();
            $x = $row['x'];
            $sql3 = "insert into LMS.author values ('$x','$author1')";
            $result = $conn->query($sql3);
            if (!empty($author2)) {$sql4 = "insert into LMS.author values('$x','$author2')";
                $result = $conn->query($sql4);}
            if (!empty($author3)) {$sql5 = "insert into LMS.author values('$x','$author3')";
                $result = $conn->query($sql5);}

            echo "<script type='text/javascript'>alert('Success')</script>";
        } else { //echo $conn->error;
            echo "<script type='text/javascript'>alert('Error')</script>";
        }

    }
    ?>
  </body>
</html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
}?>