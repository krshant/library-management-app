<?php
session_start();
?>

<html>
<head>
<title> Book Updated page </title>
<link rel="stylesheet" href="styles.css">
<style>
#btn	{
	width:100px;
	height:30px;
	background:#FF3399;
	}
th	{
	font-size:10px;
	color:black;
	width:70px;
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
#aa	{
	background:lightgreen;
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
		<li id="list"><a href="searchBook1.php"> Search by Book ID </a></li>
		<li id="list"><a href="searchBook2.php"> Search by Author </a></li>
		<li id="list"><a href="modifyBook1.php"> Modify Books </a></li>
		<li id="list"><a href="deleteBook1.php"> Delete Books </a> </li>
		<li id="list"><a href="issueBook1.php"> Issue Books </a> </li>
		<li id="list"><a href="viewissueBook.php">View Issue Books </a> </li>
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
<h2>Updated Book Table</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("atpl",$con); 

$aa=$_POST['ISBN'];
$bb=$_POST['title'];
$cc=$_POST['author'];
$dd=$_POST['edition'];
$ee=$_POST['publication'];
$ff=$_POST['cateogry'];
$gg=$_POST['date_purchase'];
$hh=$_POST['price'];

$sql="update books set edition=$dd,price='$hh' where ISBN='$aa'";

$result=mysql_query($sql,$con); //F9



$sql="select * from books where ISBN='$aa'";

$result=mysql_query($sql,$con); 

	echo"<center>";
	echo "<table>";
	echo "<tr id='aa'> <th colspan=8>Book Updated </th></tr>";
	echo "<tr>";
	echo "<th> Book No </th>";
	echo "<th> Title </th>";
	echo "<th> Author </th>";
	echo "<th> Edition </th>";
	echo "<th> Publication </th>";
	echo "<th> Category </th>";
	echo "<th> Purchase Date </th>";
	echo "<th> Price </th>";
	echo "</tr>";
	while( $row=mysql_fetch_array($result))
	{
	echo "<tr>";
	$a=$row['ISBN'];
	$b=$row['title'];
	$c=$row['author'];
	$d=$row['edition'];
	$e=$row['publication'];
	$f=$row['category'];
	$g=$row['date_purchase'];
	$h=$row['price'];

	echo "<td id='bb'>  ".$a."</td>";
	echo "<td id='bb'>  ".$b."</td>";
	echo "<td id='bb'>  ".$c."</td>";
	echo "<td id='bb'>  ".$d."</td>";
	echo "<td id='bb'>  ".$e."</td>";
	echo "<td id='bb'>  ".$f."</td>";
	echo "<td id='bb'>  ".$g."</td>";
	echo "<td id='bb'>  ".$h."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo"</center>";  

?>
</div>
</div>
<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>

</body>
</center>
</html>




