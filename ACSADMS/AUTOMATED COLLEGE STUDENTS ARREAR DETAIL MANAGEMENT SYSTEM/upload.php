<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
		$reg = $_REQUEST['reg'];
		$act= $_REQUEST['act'];
		$ids= $_REQUEST['ids'];
		
		if($act=="delete")
		{
		$qry=mysql_query("update marksheet set status='2' where regno='$reg' && id='$ids'");
		if($qry)
		{
		
		?>
		<script>alert('Request Rejected');
		window.location.href ="request.php";
		</script>
		<?php
		}
		else
		{?>
			<script>alert('failed');
			window.location.href ="request.php";
			</script>
		<?php
		}
		}
		
		
		
		
		if(isset($_POST['btn']))
{



	$imgpath=$_FILES['img']['name'];
			$errors= array();
   			echo $fname = $_FILES['img']['name'];
    		$file_tmp =$_FILES['img']['tmp_name'];
    		move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$fname);
			//echo "C1".$img= $fname;
			
		
		$qry=mysql_query("update marksheet set marksheets='$fname',status='1' where regno='$reg'  && id='$ids'");
	if($qry)
	{
	
	echo "<script>alert('Uploaded sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
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
			<h1><a href="#">COLLEGE ARREARS  <span>DETAILS MANAGEMENT SYSTEM</span></a></h1>
		
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
		<div id="page" align="center">
		
		<div align="center" class="style1">Student Marksheet Upload Form</div>
		

<br/>
	
		
		<form id="f1" enctype="multipart/form-data" action="#" method="post">
        	<table width="30%" border="1" align="center">
        
		<tr>
		<td> <div align="center"><strong>REGISTER NO</strong></div></td>
		<td> <div align="center"><strong><?php echo $reg ;?></strong></div></td>
		</tr>
		<tr>
		<td> <div align="center"><strong>Upload Mark sheet</strong></div></td>
		<td> <div align="center"><strong><input type="file" name='img' required/></strong></div></td>
		</tr>
		<tr align="center">
		 <td colspan="2"><input name="btn" type="submit" id="btn" value="Upload" />
     	 <input type="reset" name="Submit2" value="Reset" /></td>
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
			<p class="left">&copy; COLLEGE ARREARS DETAILS MANAGEMENT SYSTEM</p>
			<p class="right">&nbsp;</p>
			<div class="clear"></div>					
		</div>
		<!-- end footer -->
</div>
</body>
</html>
