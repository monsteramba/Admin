<?php
	
	$link=mysqli_connect("localhost", "root", "" ,"energymeter");

	$queryc = "	SELECT meter_id, SUM(kilos)
				FROM meter_pop
				GROUP BY meter_id; ";


	$finalmd = mysqli_query($link,$querymd); 







?>


// creating a view from the monthwise 


CREATE VIEW view1 AS 
SELECT meter_id,SUM(kilos) AS final 
FROM meter_pop
GROUP BY meter_id;

//updating the 


//updating the monthwise table from the view 
INSERT INTO monthwise(meter_id,final_read)
SELECT * FROM view1
WHERE meter_id=view1.meter_id;

/// droppping the view
drop view view1