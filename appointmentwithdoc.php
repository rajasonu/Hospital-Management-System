<?php
 session_start();

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
	
	<table width="998" border="0" align="center">
  <tr style="background-color:#87DED3; font-weight:bold;">
    <td>Sno</td>
    <td>Doctor name </td>
    <td>city</td>
    <td>Contact No </td>
    <td>Specialist</td>
    <td></td>
  </tr>

	<?php
	   
 $con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);


  $qry="select * from doctor_detail";
  $result=mysql_query($qry);
  $sno=1;
  while($row=mysql_fetch_array($result))
  {
  echo "<tr>";
    echo "<td>".$sno." </td>";
	echo "<td>".$row["doc_name"]." </td>";
	echo "<td>".$row["city"]." </td>";
	echo "<td>".$row["contact_no"]." </td>";
	echo "<td>".$row["specialist"]." </td>";
	echo "<td> 
	
	 <a href='getappointment.php?sno=".$row["doc_id"]."'>
	     Get Appointment
	</a>
	 </td>";
   echo "</tr>"; 
   $sno++;
  }


?>

	
	
</table>

	
	
	
	
	
	</td>
  </tr>
  <tr>
    <td class="data">
	
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
