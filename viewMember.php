<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>View All book page</title>
<link rel="stylesheet" href="styles.css">
<style>
th	{
	font-size:10px;
	color:black;
	width:70px;;
	font-family:verdana;
	padding:5px;
	border:1px solid #ccc;
	background:#FFCC99;
	}	

td	{
	font-size:10px;
	color:black;
	width:70px;
	font-family:verdana;
	padding:2px;
	border:1px solid #ccc;
	text-align:center;
	}	

tr:nth-child(even) {
  background: #FFCCE5;
}

tr:nth-child(odd) {
  background: #CCFFE5;
}	
a	{
	text-decoration:none;
	}



</style>
</head>
<body>
<center>
<div id="container">
  <div id="banner">
	<div id="header">
		<b><font color="black"> Library Management System </font></b>
	</div>
  </div>

<div
<div id="leftPart">
	<div id="gg">
	<img src="admin.png"><br>
	<a href="adminHome1.php"><b>ADMIN</b></a>
	</div>

	<div id="sideMenu">
		<li id="list"><a href="addMember1.php">Add Members </a></li>
		<li id="list"><a href="viewMember.php">View Members </a></li>
		<li id="list"><a href="addBook1.php"> Add Books </a></li>
		<li id="list"><a href="viewBook.php"> View Books </a></li>
		<li id="list"><a href="searchBook1.php"> Search by Book Id </a></li>
		<li id="list"><a href="searchBook2.php"> Search by Author </a></li>
		<li id="list"><a href="modifyBook1.php"> Modify Books </a></li>
		<li id="list"><a href="deleteBook1.php"> Delete Books </a> </li>
		<li id="list"><a href="issueBook1.php"> Issue Books </a> </li>
		<li id="list"><a href="logout.php"> <b>Logout</b> </a> </li>
	</div>
</div>

<div
<div id="rightPart">
<p id="ss"><strong>Logged In</strong>
	<?php
		echo $_SESSION['usrSession'];
	?>
</div>

<div
<div id="middlePart">
	<h2>Total Members</h2>

<?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("atpl",$con);

$sql="select * from memberInfo";

$result=mysql_query($sql,$con); 

	echo "<center>";
	echo "<br>";
	echo "<table>";
	echo "<tr>";
	echo "<th> Id </th>";
	echo "<th> Name </th>";
	echo "<th> Email </th>";
	echo "<th> Phone </th>";
	echo "<th> Date </th>";
	echo "<th> Password </th>";
	echo "</tr>";
$row=mysql_fetch_array($result);

	echo "<tr>";
	$a=$row['mid'];
	$b=$row['member_name'];
	$c=$row['email'];
	$d=$row['phone'];
	$e=$row['member_date'];
	$f=$row['password'];

	echo "<td id='bb'>  ".$a."</td>";
	echo "<td id='bb'>  ".$b."</td>";
	echo "<td id='bb'>  ".$c."</td>";
	echo "<td id='bb'>  ".$d."</td>";
	echo "<td id='bb'>  ".$e."</td>";
	echo "<td id='bb'>  ".$f."</td>";
	echo "</tr>";

	echo "</table>";
	echo "</center>";
?>
</div>
</div>
<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>
</center>
</body>
</html>

