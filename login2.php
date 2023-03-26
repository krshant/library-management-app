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
		font-size:24px;
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
	width:100px;
	height:30px;
	background:#FF3399;
	}
#ft	{
	padding-top:30px;
	color:#FFFFFF;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	text-decoration:none;
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
<div id="main"> 
<?php
                   $aa=$_POST['uname'];
                   $bb=$_POST['upassword'];
                   $cc=$_POST['tyur'];

                   $conn=mysql_connect("localhost","root","");

                   $db=mysql_select_db("atpl",$conn);
                   $sql="select * from user where uname='$aa' and upassword='$bb' and typeUser='$cc'";
                   $result=mysql_query($sql,$conn); 

		   while($row=mysql_fetch_array($result))
			{
			$flag=1;
			$_SESSION['usrSession']=$aa;
			
			}

                   if($flag==1)
                   {
		      echo " <h3><b>Welcome</b></h3>";
                      echo " <h3> You are login succesfully";
		      echo "<h3> Login as $aa";
                      echo " <br> <a href='adminHome1.php'>Click here</a>";
                    
		    }
                   else
                   {
                     echo " <h3>Login failed ";
                     echo " <br> <a href='login1.php'>Try again</a>";
                  }

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
