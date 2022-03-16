<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
	<title>Homepage</title>
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
	</style>
</head>

<body>
	
<div class="left">
		<img src="logo.jpeg" alt="club logo">


	</div>
<div class="mid">
		<ul class="navbar1">
			<li><a href="index.php">HOME</a></li>
			<li><a href="add.html">ADD NEW DIET PLAN</a></li>
            <li><a href='logout.php'>LOGOUT</a></li>
		</ul>
</div>
	<br/><br/>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Quantity</td>
			<td>Update</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['qty']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
	</table>	
</body>
</html>
