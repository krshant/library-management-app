<?php
session_start();
?>

<html>
<head>
<title>Book modify page1</title>
<link rel="stylesheet" href="styles.css">
<style>
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
<h2>Update Books</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("atpl",$con);
$sql="select * from books";


$result=mysql_query($sql,$con); 

	echo"<center>";
	echo "<table>";
	echo "<tr id='cc'> <th colspan=9>Books Data </th></tr>";
	echo "<tr>";
	echo "<th> Book No </th>";
	echo "<th> Title </th>";
	echo "<th> Author </th>";
	echo "<th> Edition </th>";
	echo "<th> Publication </th>";
	echo "<th> Category </th>";
	echo "<th> Purchase Date </th>";
	echo "<th> Price </th>";
	echo "<th> Edit </th>";
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
	echo "<td> <a href='modifyBook2.php?ISBN=$a'> Edit </a> </td>";
	echo "</tr>";
	}
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

</body>
</center>
</html>

