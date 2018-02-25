<?php
	
	$link=mysqli_connect("localhost", "root", "" ,"energymeter");
	do {
		$queryc = "	SELECT meter_id, SUM(kilos)
				FROM meter_pop
				GROUP BY meter_id; ";


	$finalmd = mysqli_query($link,$querymd); 



	}
	 







?>


// creating a view from the monthwise 


CREATE VIEW view1 AS 
SELECT meter_id,SUM(kilos) AS final 
FROM meter_pop
WHERE MONTH(CURDATE()) = MONTH(dtime)
GROUP BY meter_id;

//updating the 


//updating the monthwise table from the view 
UPDATE monthwise
SET final_read=( SELECT final FROM view1)
WHERE meter_id = (SELECT meter_id FROM view1)AND smon = MONTHNAME(CURDATE() - INTERVAL 1 MONTH);


INSERT INTO monthwise(meter_id,initial_read,smon)
SELECT *,MONTHNAME(CURDATE()) FROM view1;


//updating the initial value of the next month



//calculating the consumed value
UPDATE  monthwise 
SET consumed = (final_read - initial_read) 
WHERE smon = MONTHNAME(CURDATE());


/// droppping the view
drop view view1


