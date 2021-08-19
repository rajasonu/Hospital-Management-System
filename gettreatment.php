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
    <td>Doctor Treatment </td>
    <td>Doctor Name </td>

    </tr>

	<?php
	   
 $con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);


  $qry="select * from patientdetail where patientid='".$_SESSION["pid"]."'";
  $result=mysql_query($qry);
  $sno=1;
  while($row=mysql_fetch_array($result))
  {
  
    $qry1="select * from doctor_detail where doc_id='".$row["docid"]."'";
  $result1=mysql_query($qry1);
  $row1=mysql_fetch_array($result1);
  
  echo "<tr>";
    echo "<td>".$sno." </td>";
	echo "<td>".$row["suggestion"]." </td>";
	echo "<td>".$row1["doc_name"]." </td>";
	
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
