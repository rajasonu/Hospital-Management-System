<?php
 session_start();

 $pid=$_POST["pid"];
 $did=$_POST["did"];
 $data=$_POST["data"];
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
	  include "include/doctor-menu.php";
	
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
	
	<?php
	 $con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);


  $qry="update patientdetail set suggestion='$data' where patientid='$pid' and docid='$did'";
  mysql_query($qry);
	mysql_close($con);
	
	
	?>
	<h2 align="center"> Patient Treatment Detail Succesfully Save!!!</h2>
	
	
	
	
	            </td>
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
