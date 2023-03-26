<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Book added page1</title>
<link rel="stylesheet" href="styles.css">
<style>

#tb	{
	padding-left:150px;	
	}

#bt1	{
	width:100px;
	height:30px;
	background:#FF3399;
	margin-right:150px;
	margin-top:15px;
	}

#ss	{
	color:#006600;
	}

select	{
	width:150px;
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

  	<!-----------Left part -------------------!>
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

	<!-----------Right part -------------------!>
<div
<div id="rightPart">
<p id="ss"><strong>Logged In</strong>
	<?php
		echo $_SESSION['usrSession'];
	?>
</div>

	<!-----------Middle part -------------------!>
<div
<div id="middlePart">
<h2>Add Books</h2> 
<div id="tb">
<form action="addBook2.php">
<table width="500px">
<tr>
<th>Enter Book ID &nbsp; &nbsp; :</th>
<td><input type="text" name="ISBN" value=""></td>
</tr>

<tr>
<th>Enter Title &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</th>
<td><input type="text" name="title" value=""></td>
</tr>

<tr>
<th>Enter Author&nbsp; &nbsp; &nbsp; :</th>
<td><input type="text" name="author" value=""></td>
</tr>

<tr>
<th>Enter Edition &nbsp; &nbsp; &nbsp; :</th>
<td><input type="text" name="edition" value=""></td>
</tr>

<tr>
<th>Enter Publication:</th>
<td width="350px"><input type="text" name="publication" value=""></td>
</tr>

<tr>
<th>Select Category&nbsp; &nbsp; &nbsp;:</th>
	<td><select name="category">
		<option value="novel">Novel</option>
		<option value="adventure">Adventure</option>
		<option value="comedy">Comedy</option>
	    </select>
	</td>
</tr>

<tr>
<th>Purchase Date &nbsp; &nbsp; &nbsp; :</th>
<td width="350px"><input type="date" name="date_purchase" value=""></td>
</tr>

<tr>
<th>Enter Price &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:</th>
<td width="350px"><input type="text" name="price" value=""></td>
</tr>

<tr>
<th colspan="2"><input type="submit" id="bt1" name="btn" value="SUBMIT"></th>
</tr>
</table>
</form>
</div>
</div>

	<!-----------Footer part -------------------!>
</div>
<div id="footer">
<div id="ft">
		&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
		</div>
</div>

</body>
</center>
</html>
