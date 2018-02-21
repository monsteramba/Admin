<?php 
session_start();
	
	include 'connect.php';

	extract($_POST);

	$voters_id = mysql_real_escape_string($_POST['voters_id']);

    $query = "SELECT * FROM voters WHERE voters_id = $voters_id";
    $result = mysql_query($query) or die ('<meta http-equiv="refresh" content="0;url=../" />');
    
    $array = mysql_fetch_array($result);

  

    if ($date_now == $date_sched['schedule']) {

    	if ($array['voters_id'] == $voters_id && $array['done_voting'] == 0){
			$_SESSION['voters_id'] = $voters_id;
			$_SESSION['firstname'] = $array['firstname'];
			$_SESSION['lastname'] = $array['lastname'];
			header("Location:pres.php");
		}

		elseif ($array['voters_id'] == $voters_id && $array['done_voting'] == 1){
			echo '<script language="javascript">';
			echo 'alert("You can only vote once")';
			echo '</script>';
			echo '<meta http-equiv="refresh" content="0;url=vloginindex.php" />';
		}
		
		else{
			echo '<script language="javascript">';
			echo 'alert("Incorrect ID")';
			echo '</script>';
			echo '<meta http-equiv="refresh" content="0;url=vloginindex.php" />';
		}

    }
    
	
	
?>
