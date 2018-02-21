<?php 

$link=mysqli_connect("localhost", "root", "" ,"online1");

session_start();
	if (isset($_SESSION['voters_id'])){
		$voters_id = $_SESSION['voters_id'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
	}
	else{
		header("Location:../../");
	}

$canvp=$_POST['pres'];
 
$sql = " SELECT votes FROM vice_president WHERE c_id ='$canvp'";
$resultvp = mysqli_query($link, $sql);

$rowvp = mysqli_fetch_array($resultvp);


$rowvp[0] = $rowvp[0]+1 ;

$votevp="UPDATE vice_president SET votes= $rowvp[0] WHERE c_id='$canvp' ";
mysqli_query($link,$votevp);

// joint-treasurer
$canjt=$_POST['tres'];
$sql = " SELECT votes FROM joint_treasurer WHERE c_id ='$canjt'";
$resultjt = mysqli_query($link, $sql);

$rowjt = mysqli_fetch_array($resultjt);


$rowjt[0] = $rowjt[0]+1 ;


$votejt="UPDATE joint_treasurer SET votes= $rowjt[0] WHERE c_id='$canjt' ";
mysqli_query($link,$votejt);



//joint secretary

$canjs=$_POST['secre'];
$sql = " SELECT votes FROM joint_secretary WHERE c_id ='$canjs'";
$resultjs = mysqli_query($link, $sql);

$rowjs = mysqli_fetch_array($resultjs);


$rowjs[0] = $rowjs[0]+1 ;


$votejs="UPDATE joint_secretary SET votes= $rowjs[0] WHERE c_id='$canjs' ";
mysqli_query($link,$votejs);


$update="UPDATE voters set done_voting = 1 where voters_id= '$voters_id' ";
mysqli_query($link,$update);
session_destroy();
header("Location: vloginindex.php");
?>