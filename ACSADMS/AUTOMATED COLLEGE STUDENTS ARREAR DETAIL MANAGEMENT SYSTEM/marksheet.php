		<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$reg=$_SESSION['r'];
	
	
		 if(isset($_POST['btn']))
		 {
		 
		 $qry1=mysql_query("SELECT * FROM marksheet WHERE regno LIKE '$reg'");
		 $num=mysql_num_rows($qry1);
			if($num==1)
			{
		  echo "<script>alert('Request Already Sent...')</script>";
		 
		 }
		 else{
		 $qry=mysql_query("insert into marksheet values('','$reg','','0')");
		 
		 if($qry)
		 {
		 echo "<script>alert('Marksheet request sent...')</script>";

		 }
		 else
		 {
		  echo "<script>alert('Request failed...')</script>";
		 }
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
                  <td width="6%">&nbsp;</td>
                  <td width="15%">&nbsp;</td>
                  <td colspan="2"><div align="center" class="style2"><h3>Send Marksheet Request</h3> </div></td>
                  <td width="16%">&nbsp;</td>
                  <td width="3%">&nbsp;</td>
                </tr>
				<tr>
				 <td height="32">&nbsp;</td>
                  <td>&nbsp; </td>
				  <td width="50%"><strong>Registration no </strong></td>
                  <td width="10%"><label>
			<h3><?php ECHO $reg=$_SESSION['r'];?></h3>
			</label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				
				<tr>
				<td height="32">&nbsp;</td>
                  <td>&nbsp;</td>
				<td>
				   <label>
			<input type="submit" name="btn" value="Send Request"></label></td>
		
			
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
				
	
		</table>
		<form>
		
		
		
		
	
	   </div>
		<!-- end left hand main content -->
		
		<!-- start sidebar -->
		<!-- end sidebar -->
<div class="clear"></div>	
<div align="center">

<?php 
 $qrys=mysql_query("SELECT * FROM marksheet WHERE regno='$reg' ");
 if($qrys)
 {
 $rows=mysql_fetch_array($qrys);

 ?>
	<table width="50%" border="1" align="centre">
                <tr>
             
                  <td colspan="2"><div align="center" class="style2"><h3>Marksheet Request</h3> </div></td>
                 
                </tr>
				<tr align="center">
				
				  <td><strong>Registration no </strong></td>
                  <td><label>
			<h3><?php echo $reg; ?></h3>
			</label></td>
                 
                </tr>
				
				<tr align="center">
				
				  <td><strong> Marksheet</strong></td>
                  <td><label>
			<?php if($rows['status']=="0"){
			
			echo "Waiting for Admin Reply";
			}
			elseif($rows['status']=="1")
			{
			?>
			 <a href="upload/<?php echo $rows['marksheets'];?>" download>DOWNLOAD </a>
			<?php
			}
			elseif($rows['status']=="2"){
			
			echo "Request Rejected";
			}
			?>
			
			
			</label></td>
                  
                </tr>
					
				<?php 
				}
				else
				{
				echo "";
				}?>
	
		</table>

</div>	
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
