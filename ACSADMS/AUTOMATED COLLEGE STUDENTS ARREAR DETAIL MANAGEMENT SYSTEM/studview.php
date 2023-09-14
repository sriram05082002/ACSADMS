		<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$reg=$_SESSION['r'];
	
	//if(isset($_POST['btn']))
	//{
	//$reg=$_POST['reg'];
	$qry=mysql_query("SELECT * FROM arrear WHERE reg='$reg'");
	//$num=mysql_num_rows($qry);
	if($qry)
	{
	while($row=mysql_fetch_array($qry)){
	
		
				 $reg=$row['reg'];
				$no=$row['no'];
				$amnt=$row['amnt'];	
				$sub=$row['sub'];
				$status = $row['status'];
		  }
		  }
		  else
		  {
		 echo "you dont  have any arrears";
		
		  }
		 if(isset($_POST['btn']))
		 {
		 header("location:payment.php");
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
.style2 {color: #000000}
.style7 {font-weight: bold; color: #000000;}
-->
</style>
</head>
<body>
<div id="wrap">
	<div id="header">
		<div id="header-text">
			
			<!-- page header - use <span></span> to colour text white, default color orange -->
			<h1><a href="#">automated COLLEGE students ARREARS  <span>DETAILS MANAGEMENT SYSTEM</span></a></h1>
		
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
				<li class="navleft"><a href="index.html"></a></li>
				<!-- <li><a href="sview.php">View Register No</a></li>-->
				<li><a href="studview.php">Arrear Details</a></li>
				<li><a href="marksheet.php">Marksheet</a></li>
				<li><a href="index.html">Logout</a></li>
				<li class="navright"><a href="#"></a></li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<!-- left hand main content -->
		<div id="page">	
	
	<form action="" method="POST">
	
				<table width="50%" border="0" align="centre">
                <tr>
                  <td width="10%">&nbsp;</td>
                  <td width="17%">&nbsp;</td>
                  <td colspan="2"><div align="center" class="style2"></div></td>
                  <td width="23%">&nbsp;</td>
                  <td width="9%">&nbsp;</td>
                </tr>
				<tr>
				 <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
				  <td class="style7">Registration no </td>
                  <td><label>
			<h3><?php echo $reg; ?></h3>
			</label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				
				<?php if($no)
				{
				?>
				<tr>
				 <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
				  <td><strong> Arrears In </strong></td>
                  <td><label>
			<div class="columnText"><?php echo $sub;?>
			</label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
					<tr>
				 <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
				  <td><strong> No of Arrears </strong></td>
                  <td><label>
				<?php echo $no;?> 
				</label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				
				<tr>
				 <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
				  <td><strong> Amount to pay </strong></td>
                  <td><label>
			 <?php echo $amnt;?>
			 </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				<tr>
				 <td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
				  <td>&nbsp;</td>
                  
				  
				  <td> <?php if($status=="paid")
				  {
				  echo "Paid";
				  }
				  else
				  {?>
				  
				   <label>
			<input type="submit" name="btn" value="pay"></td>
			 </label>
			 <?php
			 }
			 ?>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				<?php 
				}
				else
				{
				echo "You dont have any arrears";
				}
				?>
	
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
