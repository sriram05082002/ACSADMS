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




			<?php
			 $reg=$_SESSION['r'];
			  $qry=mysql_query("SELECT * FROM arrear where reg='$reg'");
$num=mysql_num_rows($qry);
	if($num==1)
	{
	while($row=mysql_fetch_array($qry))
	{
	
	$k=$row['reg'];
	$m=$row['no'];
	$n=$row['amnt'];
	$cname=$_POST['cname'];
	$cno=$_POST['cno'];
	
}  


}
?>
			
				
	
	
	<form name="form1" method="post" action="#">
	  <table width="50%" border="0" align="centre">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
		
		 <tr>
          <td width="35%">Register no </td>
          <td><?php echo $k;?></td>
        </tr>
		 <tr>
          <td width="35%">No of Arrears ;</td>
		   <td><?php echo $m ?></td>
        </tr>
        <tr>
          <td width="35%">Amount </td>
		  <td> <?php echo $n;?></td>
        </tr>
        <tr>
          <td height="33"><span class="style4">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" /></td>
        </tr>
        <tr>
          <td height="36"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" /></td>
        </tr>
        <tr>
          <td><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn" type="submit" class="btn btn-primary" id="btn" value="Pay" /></td>
        </tr>
      </table> 
	 
  </form>
  <?php
if(isset($_POST['btn']))
  {
  $qry=mysql_query("update arrear set status='paid' where reg='$reg'");
  //$qt1=mysql_query("INSERT INTO paid VALUES('$reg',$m','$n','$cname','$cno')");
  if($qry)
  {
  ?> 
  <script>//alert('payment sucess');
</script>
<?php 
  }
  else
  {
  ?>
  <script>alert('Try again');
</script>
  <?php
  }
  }
  
  

	?>
  	
	  
	  
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
