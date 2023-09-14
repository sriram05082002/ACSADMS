<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

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
				<li class="navleft"><a href="index.html"></a></li>
				<li><a href="fen.php">Arrear Entry</a></li>
				<li><a href="fview.php">View Arrear Students</a></li>
				<li><a href="ssview.php">Viwe Register Numbers</a></li>
				<li><a href="index.html">Logout</a></li>

				<li class="navright"><a href="#"></a></li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<!-- left hand main content -->
		<div id="page">
       	 	
			<table width="100%" border="0">
        <tr>
          <td height="41">&nbsp;</td>
          <td><div align="center" class="style6">student no</div></td>
          <td><div align="center" class="style6">student name </div></td>
		  <td><div align="center" class="style6">Date of birth </div></td>
		  <td><div align="center" class="style6">Department </div></td>
		  <td><div align="center" class="style6">year </div></td>
		   <td><div align="center" class="style6">no of arrears</div></td>
          <td><div align="center" class="style6">Arrear Subject</div></td>
		  <td><div align="center" class="style6">Amount to pays</div></td>
          <td>&nbsp;</td>
        </tr>
		
			
		<?php
		include("dbconnect.php");
		session_start();
		extract($_POST);
		$qry=mysql_query("select * from arrear");
		$i=1;
		while($row1=mysql_fetch_array($qry))
		{
		$reg=$row1['reg'];
		$amnt=$row1['amnt'];
		$no=$row1['no'];
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
          <td><div align="center"><strong><?php echo $row1['sub'] ;?></strong></div></td>
			 <td><div align="center"><strong><?php echo $amnt;?></strong></div></td>
		 
        </tr>
        <?php
		$i++;
		}
		
		?>
      
	  </table>
	  
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
