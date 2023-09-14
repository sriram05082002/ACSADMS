 
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
				<!-- add class navleft to first item and navright to last item as shown 
				<li class="navleft"><a href="index.html"></a></li>
				<li><a href="fen.php">Arrear Entry</a></li>
				<li><a href="fview.php">View Arrear Students</a></li>
				<li><a href="ssview.php">Viwe Register Numbers</a></li>
				<li><a href="index.html">Logout</a></li>
				<li class="navright"><a href="#"></a></li>-->
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





    	  <form id="form1" name="form1" method="post" action="#">
          
              <table width="100%" border="0">
                <tr>
                  <td width="10%">&nbsp;</td>
                  <td width="17%">&nbsp;</td>
                  <td colspan="2"><div align="center" class="style2">
                    <h3 align="center">Arrears Entry </h3> 
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
                  <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong> Registration number </strong></td>
                  <td><label>
                  <select name="reg" id="reg">
			<?php
			$qt1=mysql_query("select reg from stud where dept='$dept'");
			while($row=mysql_fetch_array($qt1))
			{
			?>
			<option value="<?php echo $row['reg'];?>"><?php echo $row['reg'];?></option>
			<?php
			}
			?>
			</select>
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>


					<form action="" method="POST">
								
				  <tr>
                  <td height="34">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><label>
				<input type="submit" name="ent" /> </label></td>
				<td>&nbsp;</td>
                  <td>&nbsp;</td>
				
				</tr>
				  <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><div  align="right"></div></td>
                     <?php
					  $qry1=mysql_query("SELECT * FROM stud where reg='$reg'");
		  
		  while($row=mysql_fetch_array($qry1))
		  {
		  ?>
		  <tr> <td>&nbsp;</td>
                <td>&nbsp;</td>
				 <td><div  align="justify"><strong>student name </strong></div></td>
		   <td><div><?php echo $row['sname'];?></strong></div><tr /></td>
		   <tr>
		   <td>&nbsp;</td>
            <td>&nbsp;</td>
			<td><div  align="justify"><strong>Gender </strong></div></td>
		   <td><div><?php echo $row['gender'];?></strong></div><tr /></td>
		   <tr>
		   <td>&nbsp;</td>
                <td>&nbsp;</td>
				<td><div  align="justify"><strong>Dob </strong></div></td>
		   <td><div><?php echo $row['dob'];?></strong></div><tr /></td>
		   <tr>
		   <td>&nbsp;</td>
                <td>&nbsp;</td>
				<td><div  align="justify"><strong>Department </strong></div></td>
		   <td><div><?php echo $row['dept'];?></strong></div><tr /></td>
          <tr>
		   <td>&nbsp;</td>
                <td>&nbsp;</td>
				<td><div  align="justify"><strong>Year </strong></div></td>
		   <td><div><?php echo $row['year'];
		   echo"<br>";
		   }
		
		   ?></strong></div>
		   
		
		 
                </tr>
				
				<tr>
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
			</tr>
		
                </tr>
                  <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>No of arrears </strong></td>
                  <td><label>
                     <input type="text" name="no" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><strong>Subjects</strong></td>
                  <td><label>
                    <input type="text" name="sub" />
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
				  	
	                    <input name="btn" type="submit" id="btn" value="Entry" />
                    <input type="reset" name="Submit2" value="Cancel" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <p class="style1">&nbsp;</p>
              </form>
			  	<?php
				if(isset($_POST['btn']))
				{
				
	 	 		$amnt=200;
		 		$amnt=$no*$amnt;	
		 		$qry2=mysql_query("INSERT INTO arrear VALUES('$reg','$dept','$no','$sub','$amnt','$status')");
	
			if($qry2)
			{
			echo "Inserted";
			}
			else
			{
			echo "Try again";
			}
	
			}
			?>
	
	<div><strong>Note   :  Select Reg no and Dept Name  Again to Enter the No of Arreras and Subjects</strong></div>
	<p>&nbsp;</p>
				
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
