<?php
 session_start();

 $pid=$_GET["pid"];
 $did=$_GET["did"];
 
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
	
	<form method="post" action="treatmentsave.php">
	<table width="502" align="center" border="0" style="border:3px solid #339999;">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="221">&nbsp;</td>
    <td width="246">
	<input type="hidden" name="did" value="<?php echo $did ?>" />
	<input type="hidden" name="pid" value="<?php echo $pid ?>" />
	
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><strong>Treatment By Doctor </strong></td>
    <td><textarea name="data"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>

	
	
	
	
	
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
