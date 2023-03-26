<?php
session_start();
?>

<html>
<head>
<title>Admin Login page</title>
<link rel="stylesheet" href="styles.css">
<style>

button	{
	width:150px;
	height:40px;
	background:#FF3399;
	margin-top:20px;
	}

#btna	{
	margin-top:40px;
	text-decoration:none;
	}

#btnb	{
	margin-top:10px;
	text-decoration:none;
	}

#btnc	{
	margin-top:10px;
	text-decoration:none;
	}

#btn1	{
	margin-top:20px;
	text-decoration:none;
	background:lightgreen;
	}

#im	{
	margin-top:20px;
	}

#box	{
	float:left;
	margin-left:10px;
	}  

#box1	{
	width:140px;
	height:80px;
	background:#FF6666;
	}

#box2	{
	width:140px;
	height:80px;
	background:#00CC66;
	}

#box3	{
	width:140px;
	height:80px;
	background:#6666FF;
	}

#la	{
	color:black;
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


		<!----- Left part  -------!>
<div
<div id="leftPart">
	<div id="im">
		<img src="admin.png">
		<a href="adminHome1.php"><button  type="submit" id="btn1">ADMIN</button></a>

		<!----- session part -----!>
	<p><strong>Logged in:</strong>
	<?php
		echo $_SESSION['usrSession'];
	?>
	</p>
	</div>
		<a href="logout1.php" id="la"><p><b>Logout</b></p></a>
</div>
		<!----- Middle part  -------!>
<div id="middlePart">
	<div id="box">
		<div id="box1">
		<h1>50</h1><p>Total Members</p>
		</div>
		<div id="box2">
		<h1>100</h1><p>Total Books</p>
		</div>
		<div id="box3">
		<h1>2</h1><p>Borrow Books</p>
		</div>
	</div>
	<a href="addMember1.php"><button  type="submit" id="btna">Add Member</button></a>
	<a href="viewMember.php"><button  type="submit" id="btnb">View Member</button></a><br>
	<a href="addBook1.php"><button  type="submit" id="btn">Add Books</button></a>
	<a href="ViewBook.php"><button  type="submit" id="btn">View Books</button></a><br>
	<a href="searchBook1.php"><button  type="submit" id="btn">Search by BookId</button></a>
	<a href="searchBook2.php"><button  type="submit" id="btn">Search by Author</button></a><br>
	<a href="modifyBook1.php"><button  type="submit" id="btn">Modify Books</button></a>
	<a href="deleteBook1.php"><button  type="submit" id="btn">Delete Books</button></a>
	<a href="issueBook1.php"><button  type="submit" id="btn">Issue Books</button></a>
	<a href="viewissueBook.php"><button  type="submit" id="btn">View Issue Books</button></a>
</div>
</div>
</div>	
		<!---- footer part ----!>
<div id="footer">
	<div id="ft">
	&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
	</div>
</div>

</body>
</center>
</html>
