<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

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
			<h1><a href="#">AUTOMATED COLLEGE STUDENTS ARREARS  <span>DETAILS MANAGEMENT SYSTEM</span></a></h1>
		
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
		
		<div align="center" class="style1">Student Arrears & Payment Details  </div>
		
	<form action ="" method="POST">
		 <table width="100%" border="0">
                <tr>
                  <td width="10%">&nbsp;</td>
                  <td width="17%">&nbsp;</td>
                  <td colspan="2"><div align="center" class="style2"> 
                  </div></td>
                  <td width="23%">&nbsp;</td>
                  <td width="9%">&nbsp;</td>
                </tr>
				<tr>
                  <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Department </strong></td>
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
                  <td height="34">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><label>
				<input type="submit" name="ent" /> </label></td>
				<td>&nbsp;</td>
                  <td>&nbsp;</td>
				
				</tr>
				
	  </table></form>




	
		
		
        	<table width="100%" border="0">
        <tr>
          <td height="41">&nbsp;</td>
          <td><div align="center" class="style6"><strong>Student No</div></td>
          <td><div align="center" class="style6"><strong>Student Name </div></td>
		  <td><div align="center" class="style6"><strong>Date of birth </div></td>
		  <td><div align="center" class="style6"><strong>Department </div></td>
		  <td><div align="center" class="style6"><strong>Year </div></td>
		   <td><div align="center" class="style6"><strong>No of Arrears</div></td>
          <td><div align="center" class="style6"><strong>Amount to Pay</div></td>
		   <td><div align="center" class="style6"><strong>Status</div></td>
          <td>&nbsp;</td>
        </tr>
		
		
		
			
		<?php
		include("dbconnect.php");
		session_start();
		extract($_POST);
		$qry=mysql_query("select * from arrear where dept='$dept'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$reg=$row['reg'];
		$amnt=$row['amnt'];
		$no=$row['no'];
		$sts=$row['status'];
		?>

        <tr>
          <td height="42">&nbsp;</td>
          <td><div align="center"><strong><?php echo $reg ;?></strong></div></td>
		  <?php 
		  $qry1=mysql_query("SELECT * FROM stud WHERE reg='$reg'");
		  while($row=mysql_fetch_array($qry1))
		  {
		  ?>
		   <td><div align="center"><strong><?php echo $row['sname'];?></strong></div></td>
		   <td><div align="center"><strong><?php echo $row['dob'];?></strong></div></td>
		   <td><div align="center"><strong><?php echo $row['dept'];?></strong></div></td>
          <td><div align="center"><strong><?php echo $row['year'];?></strong></div></td>
		  <?php } ?>
		   <td><div align="center"><strong><?php echo $no;?></strong></div></td>
          <td><div align="center"><strong><?php echo $amnt ;?></strong></div></td>
		  <td><div align="center"><strong><?php echo $sts ;?></strong></div></td>
		
		 
        </tr>
        <?php
		$i++;
		}
		
		?>
      
	  </table>
	  
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
