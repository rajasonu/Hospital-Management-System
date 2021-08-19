<?php
session_start();
$id=$_POST["id"];
$pass=$_POST["pass"];
$con=mysql_connect("localhost","root","");
mysql_select_db("hospital",$con);
$qry="select * from admin where id='$id' and password='$pass'";

//echo $qry;
//exit;

$result=mysql_query($qry);
$row=mysql_fetch_array($result);
$num=mysql_num_rows($result);
if ($num>=1)
{
$_SESSION["user"]=$id;
$_SESSION["pid"]=$row["sno"];
header("Location: index-main1.php");
}
else
{
header("Location: doctorlogin.php?err=1");
}
mysql_close($con);
?>




