<?php
session_start();
?>

<html>
<head>
<title>Add member page 2</title>
<link rel="stylesheet" href="styles.css">
<style>

#content 	{
	padding-top:30px;
	}
table	{
	width:400px;
	height:200px;
	text-align:center;
	background:lightblue;
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
<?php

$aa=$_POST['mid'];
$bb=$_POST['member_name'];
$cc=$_POST['email'];
$dd=$_POST['phone'];
$ee=$_POST['member_date'];
$ff=$_POST['password'];

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$conn);
$sql="insert into memberInfo values('$aa','$bb','$cc','$dd','$ee','$ff')";
$result=mysql_query($sql,$conn);

	if($result)
	{
	echo " <h3> Member Added successfully";
	}
	else
	{
	echo " <h3>Registration failed ";
	echo " <br><a href='addMember1.php'>Try again</a>";
	}

?>
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