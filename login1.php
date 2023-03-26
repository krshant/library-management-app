<?php
session_start();
?>

<html>
<head>
<title>Login page</title>
<style>
#container	{
		width:80%;
		height:400px;
		background:#CCCCFF;
		}
#top	{
	width:100%;
	height:100px;
	background:#66B2FF;
	}

#leftlogo	{
		font-size:28px;
		padding-top:25px;
		text-align:left;
		padding-left:35px;
		}
#footer	{
	width:80%;
	height:80px;
	background:#808080;
	}
#btn	{
	width:80px;
	height:30px;
	background:#FF3399;
	margin-right:50px;
	margin-top:0px;
	}
#ft	{
	padding-top:30px;
	color:#FFFFFF;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	text-decoration:none;
	}

select	{
	width:145px;
	}
#us1 a	{
	text-decoration:none;
	color:green;
	}
</style>
</head>
<body>
<center>
<div id="container">
<div id="top">
	<div id="leftlogo">
		<b>	<font color="black"> Library Management System </font></b>
	</div>
</div>
<form action="Login2.php" method="POST">
<h2>Admin Login Page</h2> 
<b>Username:&nbsp;</b><input type="text" name="uname" required=""><br><br>

<b>Password:&nbsp;</b><input type="text" name="upassword" required=""><br><br>

<b> User type:&nbsp;</b> <select name="tyur" size="1">
	<option value="Admin">Admin</option>
	</select>
<br><br> <br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sub" id="btn" value="Login" action="Login2.php">
<br>
</form>
<div id="us">
<h3 id="us1">Login as:<a href="memLogin1.php">&nbsp;User</a></h3>
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
