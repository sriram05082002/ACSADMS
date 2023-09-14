	<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();



if(isset($_POST['btn']))
{
$qry=mysql_query("select * from faculty where uname='$uname' && psw='$password'");
$num=mysql_num_rows($qry);
if($num>0)
{
?>
<script>alert('welcome to admin home page');
</script>
<?php

header("location:fen.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";
echo "<script>alert('Login UnSuccessfull')</script>";

}
}


?> 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>index</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
</head>
<body>
<div id="wrap">
	<div id="header">
		<div id="header-text">
			
			<!-- page header - use <span></span> to colour text white, default color orange -->
			<h1><a href="#">Online <span>Fees payment</span></a></h1>
		
			<!-- sub title here -->
			<h2>&nbsp;</h2>
			
			<div class="clear"></div>
	  </div>
	</div>

	<div id="navigation">
		<div id="innernav">
			<ul>
				<!-- top navigation  -->
				<!-- add class navleft to first item and navright to last item as shown -->
				<li><a href="index.html">HOME</a></li>
				<li><a href="slog.php">STUDENT</a></li>
				<li><a href="flog.php">FACULTY</a></li>
				<li><a href="admin.php">ADMIN</a></li>
				<li><a href="hview.php">VIEW REGISTER NO</a></li>
				<li class="navright"><a href="#"></a></li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<!-- left hand main content -->
		<div id="page">
			
			<h2>Welcome to Arrears fees payment system </h2>
			  <form id="form1" name="form1" method="post" action="#">
			<table width="85%" border="0" align="right">
             <tr>
                <td width="4%">&nbsp;</td>
                <td width="48%">&nbsp;</td>
                <td width="15%">&nbsp;</td>
                <td width="31%">&nbsp;</td>
                <td width="2%">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2" rowspan="2"><div align="center" class="style1">Faculty Login </div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" rowspan="6"><img src="images/staff.png" alt="" width="256" height="271" /></td>
                <td>&nbsp;</td>
				
              </tr>
              <tr>
                <td height="31"><span class="style2">User Name </span></td>
                <td><label>
                  <input name="uname" type="text" id="uname" />
                </label></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="44"><span class="style2">Password</span></td>
                <td><label>
                    <input name="password" type="password" id="password" />
                </label></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td rowspan="2"><label>
                   <input name="btn" type="submit" id="btn" value="Login" />
                    <input type="reset" name="Submit2" value="Cancel" />
                </label></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>


              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
			</form>
			<p>&nbsp;</p>
				
	  </div>
		<!-- end left hand main content -->
		
		<!-- start sidebar -->
		<!-- end sidebar -->
<div class="clear"></div>		
	</div>
		<!-- start footer -->
		<div class="footer">
			<p class="left">&copy; 2018 sitename.  Design:</p>
			<p class="right">&nbsp;</p>
			<div class="clear"></div>					
		</div>
		<!-- end footer -->
</div>
</body>
</html>
