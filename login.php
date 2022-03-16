<?php session_start(); ?>
<html>
<head>
	<link href="https://fonts.google.com/specimen/Baloo+Bhaina+2?preview.size=26&query=baloo+bhai" rel="stylesheet">
	<title>Login</title>
	<style>
		
        body{
            margin: 0px;
            font-family: 'Baloo Bhaina 2', cursive;
            padding: 0px;
            background: url("https://images.pexels.com/photos/50597/man-male-boy-a-person-50597.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
            background-size:  100%
        }
        .left{
            display: inline-block;
            color: white;

            position: absolute;
            left: 34px;
            top: 20px;


        }
        .mid{
            display: block;
            width: 45%;
            margin: 20px auto;
            color: white;


        }
        .right{
            position: absolute;
            right: 20px;
            top: 20px;
            display: inline-flex;
            color: white;

            width: 13%;
        }
        .navbar1{
            display: inline-block;
        }
        .navbar1 li{
            display: inline-block;
            font-size: 15px;
        }
        .navbar1 li a{
            color: azure;
            text-decoration: none;
            padding: 34px;
        }
        .navbar1 li a:hover,.navbar1 li a.active{
            text-decoration: underline;
            color: gray;
        }
        .navbar2{
            display: inline-block;
        }

        .left img{
            width: 130px;
            height: 120px;
        }
        .left div{
            text-align: center;
        }
		.form1{
			background-color: white;
			width: 400px;
			max-width: 400px;
			margin: 8rem;
			padding: 2rem;
			box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
			border-radius: 11px;
			text-align: center;
    		margin-bottom: 1rem;
		}
		.form1 input{
            font-family: 'Baloo Bhaina 2', cursive;
            text-align: center;
            width: 200px;
            padding: 1px 2px;
            border: 2px solid black;
            margin: 3px 2px;
            font-size: 15px;
            border-radius: 15px;
			background-color: lightblue;

	</style>
</head>

<body>
<header class="header">

<div class="left">
	<img src="logo.jpeg" alt="club logo">


</div>
<div class="mid">
	<ul class="navbar1">
		<li><a href="index.php">HOME</a></li>
		<li><a href="#">ABOUT US</a></li>
		<li><a href="#">CONTACT US</a></li>
	</ul>

</div>
<div class="right">
	<button class="btn">Call Us Now</button>
	<button class="btn">Email us</button>

</div>
</header>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<a href='login.php'>-------------- Either username or password field is empty.<br/>-------------- !!!  Click Here To Go back  !!! </a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";

			echo "<a href='login.php'>---------------Invalid username or password.<br/>--------------- !!!  Click Here To Go back  !!! </a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}
	}
} else {
?>
	<div class="form1">
		<h1 style="font-size: 2rem;">Login Here !!!</h1>
		<form  method="post" action="">
			<table class="tabel" width="75%" border="0">
				<tr> 
					<td width="10%">Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr> 
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr> 
					<td>&nbsp;</td>
					<td width="1%"><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
<?php
}
?>
</body>
</html>
