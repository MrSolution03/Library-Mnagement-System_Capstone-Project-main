<?php
require 'dbconn.php';
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Management System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

    <div style="background-color:#202124;height:60px">
		<img src="images/icons8_library_50px_1.png" width="40" style="float:left;margin-left:150px;margin-top:10px"/><span style="color:#fff;float:left;margin-top:22px">LMS</span>
	</div>

	<h1>LIBRARY MANAGEMENT SYSTEM</h1>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="text" Name="RollNo" placeholder="RollNo" required="">
				<input type="password" Name="Password" placeholder="Password" required="">


			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>

			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="index.php" method="post">
				<input type="text" Name="Name" placeholder="Name" required>
				<input type="text" Name="Email" placeholder="Email" required>
				<input type="password" Name="Password" placeholder="Password" maxlength="8" required>
				<input type="text" Name="PhoneNumber" placeholder="Phone Number" maxlength="13" required>
				<input type="text" Name="RollNo" placeholder="Roll Number" maxlength="6" required="">

				<select style="color:#000;" name="department" id="Depart">
				   <option value="ENG">ENG</option>
                   <option value="SCI">SCI</option>
                   <option value="LAW">LAW</option>
                   <option value="MED">MED</option>
                   <option value="BUS">BUS</option>
				</select>
				<br>


			<br>
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			<p>By creating an account, you agree to our <a class="underline" href="terms.html">Terms</a></p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p> &copy; 2021 Library Management System__Capstone Project. All Rights Reserved </a></p>
	</div>

<?php
if (isset($_POST['signin'])) {
    $u = $_POST['RollNo'];
    $p = $_POST['Password'];
    $c = $_POST['Department'];

    $sql = "select * from LMS.user where RollNo='$u'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $x = $row['Password'];
    $y = $row['Type'];

    if (strcasecmp($x, $p) == 0 && !empty($u) && !empty($p)) { //echo "Login Successful";
        $_SESSION['RollNo'] = $u;

        if ($y == 'Admin') {
            header('location:admin/index.php');
        } else {
            header('location:student/index.php');
        }

    } else {echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
    }

}

if (isset($_POST['signup'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $mobno = $_POST['PhoneNumber'];
    $rollno = $_POST['RollNo'];
    if (!empty($_POST['department'])) {
        $category = $_POST['department'];
    }
    $type = 'Student';

    $rlno = $category . $rollno;

    $sql = "insert into LMS.user (Name,Type,Department,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rlno','$email','$mobno','$password')";

    if ($conn->query($sql) === true) {
        $sql5 = "insert into LMS.message (RollNo,Msg,Date,Time) values ('$rlno','Welcome Mr(s) $name',curdate(),curtime())";
        $result = $conn->query($sql5);
        echo "<script type='text/javascript'>alert('Success registration!')</script>";
        echo "<script type='text/javascript'>alert('Your RollNumber is :$rlno')</script>";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('User Exists')</script>";
    }
}

?>

</body>
<!-- //Body -->

</html>
