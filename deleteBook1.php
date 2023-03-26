<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Book delete page1</title>
<link rel="stylesheet" href="styles.css">
<style>

#btn	{
	width:100px;
	height:30px;
	background:#FF3399;
	}

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
	<!-------  Left Part  ------!>
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
	<!-------  Right Part  ------!>
<div
<div id="rightPart">
<p id="ss"><strong>Logged In</strong>
	<?php
		echo $_SESSION['usrSession'];
	?>
</div>

	<!-------  Middle Part  ------!>
<div
<div id="middlePart">
	<h1>Delete Books</h1>
<form action="deleteBook2.php">
	<h3> Enter Book No :
	<input type="text" name="ISBN">
	</h3>

	<h2>
	<input type="submit" name="sub" id="btn" value="Delete">
	</h2>
</form>
</div>

</div>
	<!-------  Footer Part  ------!>
<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>

</body>
</center>
</html>
