<?php

$link=mysqli_connect("localhost", "root", "" ,"energymeter");
$meter_id=$_POST['query'];
$querymd = "SELECT * FROM monthwise WHERE meter_id='$meter_id'";


$finalmd = mysqli_query($link,$querymd); 
echo "<html><body>";


echo '<table id="example2" class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <b>
                                    <center>
                                    <th>Month</th>
                                    <th>Initial Reading</th>
                                    <th>Final Reading </th>
                                    <th>Units Consumed</th>
                                    <th>Cost in Rs.</th>
                                    </center>
                                  </b>
                                </tr>
                              </thead>
                              <tbody>';
while ($mdrow=mysqli_fetch_array($finalmd,MYSQL_ASSOC)) {
echo "<tr>";
echo '<td>' .$mdrow['smon']. "</a></td>";
echo '<td>' .$mdrow['initial_read']. "</a></td>";
echo "<td>" .$mdrow['final_read']. "</td>";
echo "<td>" .$mdrow['consumed']. "</td>";
echo "<td>" .$mdrow['charges']. "</td>";

echo "</tr>";
}
echo '</tbody>
                              <tfoot>
                                
                              </tfoot>
                            </table>';

echo "</body></html>";




// do {
//     $queryc = " SELECT meter_id, SUM(kilos)
//                 FROM meter_pop
//                 GROUP BY meter_id; ";

//                 // creating a view from the monthwise 
//     $queryc .= "CREATE VIEW view1 AS 
//                 SELECT meter_id,SUM(kilos) AS final 
//                 FROM meter_pop
//                 WHERE MONTH(CURDATE()) = MONTH(dtime)
//                 GROUP BY meter_id;";    
//                //updating the monthwise table from the view    
//     $queryc .= "UPDATE monthwise
//                 SET final_read=( SELECT final FROM view1)
//                 WHERE meter_id = (SELECT meter_id FROM view1)AND smon = MONTHNAME(CURDATE() - INTERVAL 1 MONTH);";

//                 //inserting the initial value for the next month

//     $queryc .= "INSERT INTO monthwise(meter_id,initial_read,smon)
//                 SELECT *,MONTHNAME(CURDATE())   
//                 FROM view1;";  

//     $queryc .= "UPDATE  monthwise 
//                 SET consumed = (final_read - initial_read) 
//                 WHERE smon = MONTHNAME(CURDATE());";    

//     $queryc .= "drop view view1";                


//     $finalmd = mysqli_multi_query($link,$queryc); 
//     //runs every month once or we could use cron to update the values at the starting of everymonnth
    

//   }while(True)
?>