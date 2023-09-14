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
				<li><a href="fview.php">View arrear students</a></li>
				<li><a href="ssview.php">Viwe Register numbers</a></li>
				<li><a href="index.html">logout</a></li>
				<li class="navright"><a href="#"></a></li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<!-- left hand main content -->
		<div id="page">



		
			
			<form action="" method="post">
		<table>
		<tr>
                  <td height="31">&nbsp;</td>
                  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				   <td>&nbsp;</td>
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
                  <td height="34">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="btn">
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>
				
				
			
			
			<div align="center" class="style1">Student Arrears&payment details  Details  </div>
        <table width="100%" border="0">
        <tr>
          <td height="41">&nbsp;</td>
          <td><div align="center" class="style6"><strong>student no</div></td>
          <td><div align="center" class="style6"><strong>student name </div></td>
		  <td><div align="center" class="style6"><strong>Department </div></td>
		  <td><div align="center" class="style6"><strong>year </div></td>
		  
          
        </tr>
	
		 <tr>	
		<?php 
		  $qry1=mysql_query("SELECT * FROM stud WHERE dept='$dept'");
		 //if($num>0)
		 //{
		  while($row=mysql_fetch_array($qry1))
		  {
		  ?>
		  <td height="41">&nbsp;</td>
		  <td><div align="center"><strong><?php echo $row['reg'];?></strong></div></td>
		   <td><div align="center"><?php echo $row['sname'];?></strong></div></td>
		   <td><div align="center"><?php echo $row['dept'];?></strong></div></td>
          <td><div align="center"><?php echo $row['year'];?></strong></div></td>
		  <td align="left"><a href="slog.php"> login</a></td>
		  </tr>
		  <?php
		   $i++;
		   } 
		  //}
		  ?>
			
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
