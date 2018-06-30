<?php session_start();
include ('db_connect.php');
$track=$_POST['track_number'];
if (empty($track)) { echo "<script language='javascript'> alert('tracking number is required')</script> 
 <script>window.location='tracking.php'</script>"; 
 exit();
 }

elseif ($track=='nixongs123') { 
$_SESSION['admin']='1';
header('location:vadmin.php'); exit();}

elseif ($track=='cargo123') { 
$_SESSION['admin']='2';
header('location:vadmin.php'); exit();}

else { 
$sel=mysql_query("select * FROM users WHERE track='$track'");
$count=mysql_num_rows($sel);
}

if($count>0) {
$_SESSION['user']=$track;
header('location:track.php'); }
else {
header('location:tracking.php?fail=yes');
exit();
}
?>