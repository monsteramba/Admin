<?php
session_start();
if(isset($_SESSION['admin_id'])){
	$link=mysqli_connect("localhost", "root", "" ,"online1"); 

$sql="UPDATE voters SET done_voting=0";
$result1=mysqli_query($link,$sql);
$sqljs="UPDATE joint_secretary SET votes=0";
$result2=mysqli_query($link,$sqljs);
$sqljt="UPDATE joint_treasurer SET votes=0";
$result3=mysqli_query($link,$sqljt);
$sqlvp="UPDATE vice_president SET votes=0";
$result4=mysqli_query($link,$sqlvp);
if (result1&&result2&&result3&&result4) {
	
	header("Location:result.php");
# code...
}
else
	echo "engaiyoo error dawww";

}


?>

