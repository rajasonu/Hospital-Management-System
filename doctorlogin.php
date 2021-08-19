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
	<h2>Welcome to Hospital Management System</h2>	</td>
  </tr>
  <tr>
    <td class="data">
	
	<form method="post" action="login-check.php">
	<table width="542" border="0" align="center" style="background-color:#DDF4FF; border:3px solid #8AC9DB">
      <tr bgcolor="#008080">
        <td height="26" colspan="3" style="color:#FFFFFF; font-size:18px;"> Doctor Login Form </td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td><strong>Enter Your ID </strong></td>
        <td><input type="text" name="id" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><strong>Enter Your Password </strong></td>
        <td><input type="text" name="pass" /></td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Submit" /></td>
      </tr>
      <tr>
        <td align="center" style="font-weight:bold;" colspan="3">
		
		  <?php
		 if(isset($_GET["err"]))
		 {
		  echo "Invalid Login Detail!!!";
		 }
		
		?>		</td>
        </tr>
    </table>
	</form>
	
    <p>&nbsp;</p>
	      </p></td>
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
