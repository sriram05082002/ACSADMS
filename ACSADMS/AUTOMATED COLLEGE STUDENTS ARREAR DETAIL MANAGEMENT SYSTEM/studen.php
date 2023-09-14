
	  <?php
		include("dbconnect.php");
		extract($_POST);
		session_start();
		if(isset($_POST['btn']))
		{
			$max_qry = mysql_query("select max(id) from stud");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		$rg="UG190".$id;		
		$qry=mysql_query("INSERT INTO stud (sname,id,gender,dob,dept,year,reg)  VALUES('$sname','$id','$gender','$dob','$dept','$year','$rg')");
		if($qry)
		{
		echo  " data inserted sucessfully";
		}
		else
		{
		echo "try again";
		}
		}

		?>
		
		
		
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CADMS</title>
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
			<h1><a href="#">automated COLLEGE stidents ARREARS  <span>DETAILS MANAGEMENT SYSTEM</span></a></h1>
		
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
				<li><a href="adminhome.php">Admin home</a></li>
				<li><a href="studen.php">Student</a></li>
				<li><a href="fen.php">Add Arrears</a></li>
				<li><a href="view.php">View Payment Details</a></li>
				<li><a href="request.php">Request</a></li>
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
                  <td height="30">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Register no</strong></td>
                  <td><label>
                    <?php 
					$qr=mysql_query("select reg from stud where sname='$sname'");
					while($row1=mysql_fetch_array($qr))
					{
					echo $row1['reg'];
					}
					
					?>
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
			   
			   
			   
			    <tr>
                  <td width="10%">&nbsp;</td>
                  <td width="17%">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                  <td width="23%">&nbsp;</td>
                  <td width="9%">&nbsp;</td>
                </tr>
                <tr>
                  <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Student Name </strong></td>
                  <td><label>
                    <input name="sname" type="text" id="sname" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Gender</strong></td>
                  <td><label>
                    <input name="gender" type="radio" value="male" /> male
					 <input name="gender" type="radio" value="female" />female
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				<tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>DOB</strong></td>
                  <td><label>
                    <input name="dob" type="text" id="dob" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				<tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Department</strong></td>
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
                  <td><strong>Year</strong></td>
                  <td><label>
                    <input name="year" type="text" id="year" />
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
                    <input name="btn" type="submit" id="btn" value="Add Student" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
			  </form>
				
	  </div>
		<!-- end left hand main content -->
		
		<!-- start sidebar -->
		<!-- end sidebar -->
<div class="clear"></div>		
	</div>
		<!-- start footer -->
		<div class="footer">
			<p class="left">&copy; AUTOMATED COLLEGE STUDENTS ARREARS DETAILS MANAGEMENT SYSTEM</p>
			<p class="right">&nbsp;</p>
			<div class="clear"></div>					
		</div>
		<!-- end footer -->
</div>
</body>
</html>
