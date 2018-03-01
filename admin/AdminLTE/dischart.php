<?php
  $link=mysqli_connect("localhost", "root", "" ,"energymeter");
  session_start();
  if (isset($_SESSION['admin_id'])){
    $admin_id = $_SESSION['admin_id'];
    $firstname = $_SESSION['firstname'];
    
  }
  else{
    header("Location:../../");
  }
  $meter_id=$_POST['id_m'];
  
  
                              
$queryv = " SELECT meter_id,smon,consumed
            FROM `monthwise`
            WHERE meter_id='$meter_id'
            order by smon desc; ";

$finalv = mysqli_query($link,$queryv); 

$nrow   = mysqli_fetch_array($finalv,MYSQL_ASSOC); 



                            
?>
<script>
var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['f_data'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
<?php
$data=mysqli_query($mysqli,"SELECT * FROM t_test");
?>
var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['f_name'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
</script>