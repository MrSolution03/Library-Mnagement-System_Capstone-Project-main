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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
  </head>
  <body>
    <div class="container">
    <div class="container-aside">
      <section class="aside">
        <div class="aside-top">
           <img src="images/icons8_library_100px.png">
           <P>Library management system</P>
        </div>
        <div class="aside-bottom">
          <div class="dashboard item">

            <a href="#" class="dash link"><i class="fa fa-tachometer" aria-hidden="true"></i> DashBoard</a>
          </div>
          <!-- <div class="book item">

            <a href="#" class="book_link link" onclick="drp_down()"><i class="fa fa-book" aria-hidden="true"></i> Book</a>
              <div class="list_book drp-down">
                <ul>
                  <li><a href="book1.php" class="add_b link" id="list"><i class="fa fa-plus" aria-hidden="true"></i> Lisr of books</a></li>
                  <li><a href="addbook.php" class="add_b link" id="list"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></li>
                  <li><a href="#" class="del_b link" id="list"><i class="fa fa-minus" aria-hidden="true"></i> Delete</a></li>
                  <li><a href="issue_requests.php" class="issue_b link" id="list"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Issue Book</a></li>
                  <li><a href="return_requests" class="return_b link" id="list"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Return Book</a></li>
                </ul>
              </div>
          </div>
          <div class="user item">

            <a href="#" class="user_link link" onclick="drp_down_()"><i class="fa fa-book" aria-hidden="true"></i> User</a>
              <div class="list_usr drp-down_">
                <ul>
                  <li><a href="student.php" class="add_u link" id="list"><i class="fa fa-plus" aria-hidden="true"></i> list of student</a></li>
                  <li><a href="#" class="add_u link" id="list"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></li>
                  <li><a href="#" class="del_u link" id="list"><i class="fa fa-minus" aria-hidden="true"></i> Delete</a></li>
                  <li><a href="#" class="user_detail link" id="list"><i class="fa fa-user" aria-hidden="true"></i> modify user</a></li>
                </ul>
              </div>
          </div> -->

        <div class="req item">

          <a href="message.php" class="request link"><i class="fa fa-comment" aria-hidden="true"></i> Messages</a>
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

          <a href="recommendations.php" class="request link"><i class="fa fa-commenting-o" aria-hidden="true"></i> Book Recomandation</a>
        </div>

        <div class="message item">

          <a href="current.php" class="message msg link"><i class="fa fa-book" aria-hidden="true"></i> Currently Issued Books</a>
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
          <div class="profile">
            <h1>Admin</h1>
             <!-- <button onclick="show()" class="profile_btn">profile</button>
             <div class="list_drp" style="z-index: 1000000;">
                <a href="#">account</a>
                <a href="#">logout</a>
             </div> -->

          </div>
      </section>



      <section class="main-content">
           <div class="dashboard">
            <div class="container-dashboard">
              <div class="box b_one">
                <i class="fa fa-book" aria-hidden="true"></i>
                <p>Book Issue: <spany>7</spany></p>
              </div>
              <div class="box b_two">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                <p>Book Returned: <span>2</span></p>
              </div>
              <div class="box b_three">
                <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                <p>Book not Returned: <span>5</span></p>
              </div>
              <div class="box b_four">
                <i class="fa fa-users" aria-hidden="true"></i>
                <p>Borrowers: <span>120</span></p>

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


  </body>
</html>
<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
}?>