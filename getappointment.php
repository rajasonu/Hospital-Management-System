<?php
 session_start();
 $docid=$_GET["sno"];
 $pid=$_SESSION["pid"]; 
	   
 $con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);


  $qry="insert into patientdetail(docid, patientid, appointment) values('$docid', '$pid', 'YES')";
  
  //echo $qry;
  //exit;
  mysql_query($qry);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/r1.css" />
</head>

<body>
<table width="1112" align="center" border="0">
  <tr>
    <td>
	<?php
	
	 include "include/topheader.php";
	
	?>
	</td>
  </tr>
  <tr>
    <td>
	<hr size="2" color="#3399CC" />	</td>
  </tr>
  <tr>
    <td>
	<?php
	  include "include/patient-menu.php";
	
	?>
	</td>
  </tr>
  <tr>
    <td>
	<hr size="2" color="#3399CC" />	</td>
  </tr>
 <?php
   include "include/banner.php";
 
 ?>
 
  <tr>
    <td>
	
	
	
	
	
	
	
	</td>
  </tr>
  <tr>
    <td class="data">
	<h2 align="center"> Your Appointment Succesfully Booked With Doctor</h2>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td><hr size="2" color="#3399CC" /></td>
  </tr>
  <?php
    include "include/copyrightinfo.php";
  
  ?>
</table>
</body>
</html>
