<?php
session_start();
?>

<html>
<head>
<title>Book modify page2</title>
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

tr:nth-child(even) {
  background: #FFCCE5;
}

tr:nth-child(odd) {
  background: #CCFFE5;
}	

a	{
	text-decoration:none;
	}


button	{
	width :100px;
	height: 40px;
	padding:10px;
	background:#FFB266;
	}

#bb	{
	width:150px;
	height:25px;
	background:#FF99FF;
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
<h2>Update Book Table</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("atpl",$con);  


$bb=$_GET['ISBN']; 

$sql="select * from books where ISBN='$bb'";


$result=mysql_query($sql,$con);
	 
	echo"<center>";
	echo "<table>";
	while( $row=mysql_fetch_array($result))
	{
	$a=$row['ISBN'];
	$b=$row['title'];
	$c=$row['author'];
	$d=$row['edition'];
	$e=$row['publication'];
	$f=$row['category'];
	$g=$row['date_purchase'];
	$h=$row['price'];

	echo "<form name='f1' action='ModifyBook3.php' method='POST'>";

	echo "<tr>";
	echo "<th> Book No </th>";
	echo "<td> <input readonly type='text' name='ISBN' value='$a'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Title </th>";
	echo "<td> <input readonly type='text' name='title' value='$b'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Author </th>";
	echo "<td> <input readonly type='text' name='author' value='$c'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Edition </th>";
	echo "<td> <input type='text' name='edition' value='$d'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Publication </th>";
	echo "<td> <input  type='text' name='publication' value='$e'></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<th> Category </th>";
	echo "<td> <input readonly type='text' name='category' value='$f'></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<th> Purchase Date </th>";
	echo "<td> <input readonly type='date' name='date_purchase' value='$g'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Price </th>";
	echo "<td> <input  type='text' name='price' value='$h'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> UPDATE </th>";
	echo "<td> <input  type='submit' id='btn' name='sub' value='Update'></td>";
	echo "</tr>";

	echo "</form>";
	}
	echo"</table>";
        echo"</center>";  
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





