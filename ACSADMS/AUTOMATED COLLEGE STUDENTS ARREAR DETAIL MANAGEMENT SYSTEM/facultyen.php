		  <?php
		include("dbconnect.php");
		session_start();
		extract($_POST);
		if(isset($_POST['btn']))
		{
		$qry=mysql_query("INSERT INTO faculty VALUES('$fname','$dept','$dn','$class','$uname','$psw')");
		if($qry)
		{
		echo" data inserted sucessfully";
		}
		else
		{
		echo"try again";
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
				<li><a href="adminhome.php">Admin Home</a></li>
				<li><a href="studen.php">Student</a></li>
				<li><a href="facultyen.php">Faculty</a></li>
				<li><a href="view.php">View Payment Details</a></li>
				<li><a href="index.html">Logout</a></li>
				<li class="navright"><a href="#"></a></li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<!-- left hand main content -->
		<div id="page">
		
		    <form id="form1" name="form1" method="post" action="">
          
              <table width="100%" border="0">
                <tr>
                  <td width="10%">&nbsp;</td>
                  <td width="17%">&nbsp;</td>
                  <td colspan="2"><div align="center" class="style2"><h3>faculty  Login </h3> </div></td>
                  <td width="23%">&nbsp;</td>
                  <td width="9%">&nbsp;</td>
                </tr>
                <tr>
                  <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>faculty Name </strong></td>
                  <td><label>
                    <input name="fname" type="text" id="fname" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
               
				<tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>department</strong></td>
                  <td><label>
                   <select name="dept" id="dept">
			<?php
			$qt=mysql_query("select * from department");
			while($row=mysql_fetch_array($qt))
			{
			?>
			<option value="<?php echo $row['dept'];?>"><?php echo $row['dept'];?></option>
			<?php
			}
			?>
            </select>
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				 <tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>department number</strong></td>
                  <td><label>
                    <input name="dn" type="text" id="dn" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				
				<tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Class</strong></td>
                  <td><label>
                    <input name="class" type="text" id="class" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				<tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>username</strong></td>
                  <td><label>
                    <input name="uname" type="text" id="uname" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr><tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Password</strong></td>
                  <td><label>
                    <input name="psw" type="password" id="psw" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				
                <tr>
                  <td height="30">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="34">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><label>
                    <input name="btn" type="submit" id="btn" value="Login" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <p class="style1">&nbsp;</p>
              </form>
			  
			   </div>
		<!-- end left hand main content -->
		
		<!-- start sidebar -->
		<!-- end sidebar -->
<div class="clear"></div>		
	</div>
		<!-- start footer -->
		<div class="footer">
			<p class="left">&copy; AUTOMATED COLLEGE STUDENTS ARREARS DETAILS MANAGEMENT SYSTEM </p>
			<p class="right">&nbsp;</p>
			<div class="clear"></div>					
		</div>
		<!-- end footer -->
</div>
</body>
</html>
