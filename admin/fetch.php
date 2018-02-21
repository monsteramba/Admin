<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "energymeter");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM quater_master 
  WHERE meter_id LIKE '%".$search."%'
  OR name LIKE '%".$search."%' 
  OR door_no LIKE '%".$search."%' 
  OR address LIKE '%".$search."%' 
  OR city LIKE '%".$search."%'
  OR phno LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM quater_master ORDER BY meter_id
 ";
}
echo "<html><body>";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr><b>
     <th>Meter_id</th>
     <th>Name</th>
     <th>door_no</th>
     <th>Address</th>
     <th>City</th>
     <th>Phone number</th>
    </tr></b>
 ';
 echo $output;
 while($row = mysqli_fetch_array($result))
 {

    echo '<tr><td><form method="post" action="index2.php"><input type="submit" name="id_m" class="btn btn-primary" value='. $row["meter_id"].'></form>';
   
    echo '</td><td>';
    echo $row["name"];
    echo '</td><td>';
    echo $row["door_no"];
    echo '</td> <td>';
    echo $row["address"]; 
    echo '</td><td>'; 
    echo $row["city"];
    echo '</td><td>';
    echo $row["phno"];
    echo'</td></tr>';
 }

 echo "</table><?div></body></html>";
}
else
{
 echo 'Data Not Found';
}
echo "</body></html>";
?>


