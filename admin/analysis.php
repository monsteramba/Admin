<?php
session_start();
if(isset($_SESSION['admin_id'])){

	$link=mysqli_connect("localhost", "root", "", "online1");
	$sql="SELECT * FROM joint_secretary  UNION SELECT * FROM joint_treasurer UNION SELECT * FROM vice_president"; 
	$result=mysqli_query($link,$sql);
	$fp = fopen('file.csv', 'w');

	echo mysqli_num_rows($result);
	while($row=mysqli_fetch_row($result)){
 			fputcsv($fp, $row);	
	}






fclose($fp);
}
else
	echo "session error dawww";

  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: "file.csv",

});
	</script>
</head>
<body>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js" ></script>
</body>
</html>










