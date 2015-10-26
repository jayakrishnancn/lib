<?php 
require_once '../require.php';

$html=isset($_POST['html'])?htmlentities($_POST['html']):" ";
$heading=isset($_POST['heading'])?htmlentities($_POST['heading']):" ";
$css=isset($_POST['css'])?htmlentities($_POST['css']):" ";
$script=isset($_POST['script'])?htmlentities($_POST['script']):" ";
$csslink=isset($_POST['csslink'])?htmlentities($_POST['csslink']):" ";

$html=mysqli_real_escape_string($conn,$html);
$css=mysqli_real_escape_string($conn,$css);
$script=mysqli_real_escape_string($conn,$script);
$heading=mysqli_real_escape_string($conn,$heading);

$csslink=mysqli_real_escape_string($conn,$csslink);

$sql="INSERT INTO lib(heading,html,css,script) VALUES('".$heading."','".$html."','".$css."','".$script."') ";
echo $sql;
if(mysqli_query($conn,$sql)){
	echo "<script>window.location='../';</script>";
	die();
}

