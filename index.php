<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
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
            width: 55%;
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
        .wlcm{
            width: 350px;
            max-width: 250px;
            margin: 5rem;
            padding: 5rem;
            color: black;
            text-align:start;  
            background: url(https://media3.giphy.com/media/3o7TKMt1VVNkHV2PaE/giphy.gif?cid=ecf05e479l2jopc16tsw9a5zxmt6ommsmwjo5u61yksai6j5&rid=giphy.gif&ct=g);  
            background-position: center;     
            border-radius: 50rem;   
        }
        .info{
            color: white;
            text-align: center;
            font-size: 25px;
            margin: 100px auto;
            padding: 2px 2px;
            width: 80%;
            border-radius: 10px;
            background: url("https://images.pexels.com/photos/6346682/pexels-photo-6346682.jpeg?cs=srgb&dl=pexels-francesco-ungaro-6346682.jpg&fm=jpg");
            opacity: 80%;

            
        }
        .table{
            position: absolute;
            margin: 50px;
            padding: 100px;
            right: 34px;
            top: 80%;
        }
        .table table{
            border : 4px solid azure;
            border-radius: 10px;
            margin: 40px 50px;
        }
        .table tr:nth-child(even) {
            background-color: rgb(64, 65, 77);
        }
        .table tr:hover {background-color: gray;}
        .table th,tr{
            background-color: black;
            text-align: center;
            border: 2px solid rgb(69, 67, 73);
            color: azure;
            margin: 100px 200px;
            padding: 2px 3px;
            width: 20%;
            padding-top: 2px;
            padding-bottom: 30px;

        }
        .table td{
            border: 2px solid rgb(85, 79, 81) ;
            border-collapse: collapse;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .container{
            color: azure;
            font-size: 20px;
            margin: 40px 180px;
            padding: 1px;
            width: 33%;
            border-radius: 15px;


        }
        .container h1{
            text-align: center;
            background-color: black;
            border: 1px solid azure;
            border-radius: 15px;
            width: 60%;
            margin: 10px 10px;
            padding: 5px 5px;
    
        }
        .container button{
            display: block;
            width: 60%;
            margin: 10px 10px;
            padding: 5px 5px;
            background-color: black;
            border-radius: 15px;
            color: azure;
            margin: 3px 2px;

        }
        .container button:hover{
            background-color: gray;
        }
        .form input{
            font-family: 'Baloo Bhaina 2', cursive;
            text-align: center;
            width: 400px;
            padding: 1px 2px;
            border: 2px solid black;
            margin: 3px 2px;
            font-size: 15px;
            border-radius: 15px;
        }
        .wlcm img{
            width: 100px;
            height: 100px;
            border-radius: 5rem;
        }
	</style>
</head>

<body>
	<header class="header">

	<div class="left">
		<img src="logo.jpeg" alt="club logo">


	</div>
	<div class="mid">
		<ul class="navbar1">
			<li><a href="" class="active">HOME</a></li>
            <li><a href='view.php'>VIEW AND ADD PRODUCTS</a></li>
			<li><a href="bmi.html">BMI CALCULATOR</a></li>
            <li><a href='logout.php'>LOGOUT</a></li>
		</ul>

	</div>
	<div class="right">
		<button class="btn">Call Us Now</button>
		<button class="btn">Email us</button>

	</div>
	</header>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
	    <div class="wlcm">			

            <h1>Welcome</h1><?php echo $_SESSION['name']
            ?>

        </div>


        <br/>
		<br/>

        <div class="info">
        The last three or four reps is what makes the muscle grow. This area of pain divides a champion from someone who is not a champion.’
        <br>— Arnold Schwarzenegger, seven-time Mr. Olympia
    </div>

    <div class="table">
        <table>
            <tr>
                <th>Membership</th>
                <th>Fees</th>
            </tr>
            <tr>
                <td>Per month /</td>
                <td>2000/-</td>
            </tr>
            <tr>
                <td>6 months /</td>
                <td>5000/-</td>
            </tr>
            <tr>
                <td>1 year /</td>
                <td>7000/-</td>
            </tr>
        </table>
    </div>




        <div class="container">
        <h1 id="join">New Addmission</h1>
        <form action="noaction.php">
            <div class="form">
                <input type="text" name="" placeholder="Enter Your Full Name">
            </div>

            <div class="form">
                <input type="text" name="" placeholder="Age">
            </div>

            <div class="form">
                <input type="text" name="" placeholder="Gender">
            </div>

            <div class="form">
                <input type="text" name="" placeholder="Duration">
            </div>
            <div class="form">
                <input type="text" name="" placeholder="phone number">
            </div>
            <button class="btn1" onclick="none">submit</button>
        </form>
    </div>-->

	<?php
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<a href='login.php'>Login</a>< |||||||||| <a href='register.php'>Register</a>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
	}
	?>
	
</body>
</html>
