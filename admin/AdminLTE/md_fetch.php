<?php
$link=mysqli_connect("localhost", "root", "" ,"energymeter");
$meter_id=$_POST['query'];
$querymd = "SELECT * from monthwise where meter_id='$meter_id'";


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




do {
    $queryc = " SELECT meter_id, SUM(kilos)
        FROM meter_pop
        GROUP BY meter_id; ";


  $finalmd = mysqli_query($link,$querymd); 



  }while(True)
?>