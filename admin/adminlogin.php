<?php 
session_start();
	
	mysql_connect("localhost", "root", "");
    mysql_select_db("energymeter");


	extract($_POST);

	$admin_id = mysql_real_escape_string($_POST['admin_id']);
    $pass = md5(mysql_real_escape_string($_POST['pass']));

    $query = "SELECT * FROM admin";
    $result = mysql_query($query) or die ("Verification error");
    $array = mysql_fetch_array($result);
    
    
    if (($array['admin_id'] == $admin_id) && ($array['pass'] == $pass)){
        $_SESSION['admin_id'] = $admin_id;
        $_SESSION['id'] = $array['id'];
        header("Location:AdminLTE/index.php");
    }
    
    else{
    	echo '<script language="javascript">';
        echo 'alert("Incorrect admin_id or pass")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=../admin/adminloginindex.php" />';
    }
?>