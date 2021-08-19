<?php
 $name=$_POST["pname"];
 $gname=$_POST["gname"];
 $age=$_POST["age"];
 $gender=$_POST["gender"];
 $add=$_POST["add"];
 $problem=$_POST["problem"];
 $id=$_POST["id"];
 $pass=$_POST["pass"];
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
	  include "include/top-menu.php";
	
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
	<h2>&nbsp;</h2>	</td>
  </tr>
  <tr>
    <td class="data"><p>&nbsp;</p>
	      
		  
		  
		  <?php
		  
 $con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);
$qry="insert into patient (name, gname, age, gender, address, problem, id, password)  values('$name', '$gname', '$age', '$gender', '$add', '$problem', '$id', '$pass')";
mysql_query($qry);

		  
		  ?>
		  
		  
		  
		  
		<h2 align="center"> You Are Succesfully Registered <br /> Now You can <a href="patientlogin.php"> Login </a> To Appointment With Your Doctor   
		  
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
