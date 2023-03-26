<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Book added page 2</title>
<link rel="stylesheet" href="styles.css">
<style>


</style>
</head>
<body>
<center>
<div id="container">
<div id="banner">
	<div id="header">
		<b>	<font color="black"> Library Management System </font></b>
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
		<li id="list"><a href="logout.php"> <b>Logout</b> </a> </li>
	</div>
</div>

<div
<div id="rightPart">
<p><strong>Logged in:</strong>
	<?php
		echo $_SESSION['usrSession'];
	?>
</div>

<div 
<div id="middlePart">
<?php

$aa=$_GET['ISBN'];
$bb=$_GET['title'];
$cc=$_GET['author'];
$dd=$_GET['edition'];
$ee=$_GET['publication'];
$ff=$_GET['category'];
$gg=$_GET['date'];
$hh=$_GET['price'];

$con=mysql_connect("localhost","root","");


$db=mysql_select_db("atpl",$con);


$sql="insert into books values('$aa','$bb','$cc','$dd','$ee','$ff','$gg','$hh')";

$result=mysql_query($sql,$con); 

	if($result)
	echo " <h3> Congratulation, Book added done";
	else
	echo " <h3> Book not added";

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