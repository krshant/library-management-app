<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Member add page 1</title>
<link rel="stylesheet" href="styles.css">
<style>
#btn	{
	width:100px;
	height:30px;
	background:#FF3399;
	}

#content{
	padding-top:30px;
	}

table	{
	width:400px;
	height:200px;
	text-align:center;
	}

img	{
	width:70px;
	height:60px;
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
<div id="content">
<form action="addMember2.php" method="POST">
	<table >
	<tr>
	<th colspan=2><h3>Member Registration Form</h3></th>
	</tr>
	
	<tr>
	<td>Member ID :</td>
	<td><input type="text" name="mid"></td>
	</tr>

	<tr>
	<td>Member Name :</td>
	<td><input type="text" name="member_name"></td>
	</tr>

	<tr>
	<td>Enter Email :</td>
	<td><input type="text" name="email"></td>
	</tr>
	
	<tr>
	<td>Enter Phone :</td>
	<td><input type="text" name="phone"></td>
	</tr>

	<tr>
	<td>Member Date :</td>
	<td><input type="date" name="member_date"></td>
	</tr>

	<tr>
	<td>Enter Password : </td>
	<td><input type="text" name="password"></td>
	</tr>

	<tr>
	<td colspan=2><input type="submit" name="sub" id="btn" value="Register" action="addMember2.php" ></td>
	</tr>
	</table>
</form>
</div>
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