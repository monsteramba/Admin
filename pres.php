<?php 
include 'connect.php';
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>

	<?php include 'head.php'; ?>

	<title>VOTING HUB</title>
	<!-- Materlize-->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

	<!-- Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
	<style>
		label > input{ /* HIDE RADIO */
			visibility: hidden; /* Makes input not-clickable */
			position: absolute; /* Remove input from document flow */
		}
		label > input + img{ /* IMAGE STYLES */
			cursor:pointer;
			border:2px solid transparent;
		}
		label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
			border:4px solid #f00;
		}

		body{
			background: #ccb001;
		}


		/* ----------------------------------------------------- */

		input[type="checkbox"]{
			display: none;
		}
		input[type="checkbox"]+label{
			padding: 10px 0px;
			text-align: center;
			width: 240px;
			display: inline-block;
			margin: 2px;
			cursor: pointer;
			-webkit-filter: grayscale(100%);
			-moz-filter: grayscale(100%);
			-ms-filter: grayscale(100%);
			-o-filter: grayscale(100%);
			filter: grayscale(100%);

		}
		input[type="checkbox"]:checked+label{
			color: blue;
			font-weight: bold;
			border-radius: 5px;
			-webkit-filter: grayscale(0%);
			-moz-filter: grayscale(0%);
			-ms-filter: grayscale(0%);
			-o-filter: grayscale(0%);
			background: green;
		}


		.c_img{
			border: 1px solid black;
			width: 200px;
			height: 250px;
			display: block;
			margin: 0 auto;
		}

		.sub{
			margin: 0 auto;
			display: block;
			width: 1024px !important;
			height: 50px !important;
			text-align: center !important;
		}

	</style>
	<script type="text/javascript">
		function than(){
				

			alert("THANK YOU for casting your vote :)");

		}
	</script>

</head>
<body style="font-family:roboto">
	<div class="container">

		<div class="jumbotron">
			<h1 class="display-3">Hello,<h1 style="color:#f00"> <?php echo $firstname . " " . $lastname . ""; ?> </h1></h1>
			<br> <p class="lead"><B>INSTRUCTIONS TO VOTE:</B></p>
			<hr class="my-4">
			<p>
				i) Click the image/picture of your selected candidate for each position. 
				<br>ii)To undo a vote, click again the highlighted image
				<br>iii) After you finish selecting, click the <button class="btn btn-primary">Sumbit your votes</button> button below.
				<b>Vote wisely.</b>
			</p>


		</div>




		<form method="POST" action="addvote.php" onsubmit="than()" class="form-control" name="vote" >

<!--VICE PRESIDENT-->
			<center><h1> Vice President</h1></center>

			<hr width="89%">
			<div class="row">
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
					<label>
							<input type="radio" name="pres" value="vp03">
							<img class="card-img-top" src="images/durga.jpg" alt="Card image cap">
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center>  Durga K</center></h4>

							<hr width="20%>">

						</div>
				</div> 
				</div>
				
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
						<input type="radio" name="pres" value="vp02">
						<img class="card-img-top" src="images/perumal.jpg" alt="Card image cap">
					</label>
					<div class="card-block"><hr width="20%>">
						<h4 class="card-title"> <center>  Perumal D</center></h4>

						<hr width="20%>">
					</div>
					</div> 

				</div>
			



				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="pres" value="vp04">
							<img class="card-img-top" src="images/dinesh.jpg" alt="Card image cap">
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center> Dinesh Kumar K</center></h4>

							<hr width="20%>">
						</div>
					</div> 
				</div>
				
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="pres" value="vp01">
							<img class="card-img-top" src="images/IMG-20170810-WA0013_1502376485049_1502377248323.jpg" >
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center>  Archith Krishnan S R</center></h4>

							<hr width="20%>">
						</div>
					</div>

				</div>

			</div>
			<hr width="89%">



			<!--Joint SECRETARY-->


			<center><h1> JOINT SECRETARY</h1></center>

			<hr width="89%">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="secre" value="js01">
							<img class="card-img-top" src="images/Aakash.jpg" >
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center>  Aakash B</center></h4>

							<hr width="20%>">
						</div>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="secre" value="js02">
							<img class="card-img-top" src="images/kishore.jpg" alt="Card image cap">
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center> Kishore R </center></h4>

							<hr width="20%>">
						</div>
					</div> 

				</div>
				<div class="col-lg-3"></div>

			</div>
			<hr width="89%">
			<!--JOINT TREASURER-->


			<center><h1> JOINT TREASURER</h1></center>

			<hr width="89%">
			<div class="row">
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="tres" value="jt01">
							<img class="card-img-top" src="images/surya.jpg" alt="Card image cap">
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center> Suriya E R</center></h4>

							<hr width="20%>">
						</div>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="tres" value="jt02">
							<img class="card-img-top" src="images/vignesh.jpg" >
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center>  Vigneshwaran V</center></h4>

							<hr width="20%>">
						</div>
					</div> 

				</div>
				<div class="card" style="width: 15rem;">
					<label>
						<input type="radio" name="tres" value="jt03">
						<img class="card-img-top" src="images/janarthan.jpg" alt="Card image cap">
					</label>
					<div class="card-block"><hr width="20%>">
						<h4 class="card-title"> <center>  Janarthanan N</center></h4>

						<hr width="20%>">
					</div>
				</div> 



				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="tres" value="jt04">
							<img class="card-img-top" src="images/barath.jpg" alt="Card image cap">
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center>  Barath G</center></h4>

							<hr width="20%>">

						</div>
					</div> 
				</div>

			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="tres" value="jt05">
							<img class="card-img-top" src="images/maruthu.jpg" >
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center>  Maruthu Pandi N</center></h4>

							<hr width="20%>">
						</div>
					</div>

				</div>
				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="tres" value="jt06">
							<img class="card-img-top" src="images/ramya.jpg" alt="Card image cap">
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center> Ramya R</center></h4>

							<hr width="20%>">
						</div>
					</div> 

				</div>
				<div class="card" style="width: 15rem;">
					<label>
						<input type="radio" name="tres" value="jt07">
						<img class="card-img-top" src="images/geetha.jpg" alt="Card image cap">
					</label>
					<div class="card-block"><hr width="20%>">
						<h4 class="card-title"> <center>  Geethanjali B</center></h4>

						<hr width="20%>">
					</div>
				</div> 



				<div class="col-lg-3">
					<div class="card" style="width: 15rem;">
						<label>
							<input type="radio" name="tres" value="jt08">
							<img class="card-img-top" src="images/tamilarasi.jpg" alt="Card image cap">
						</label>
						<div class="card-block">
							<hr width="20%>">
							<h4 class="card-title"> <center>  TamilArasi A</center></h4>

							<hr width="20%>">

						</div>
					</div> 
				</div>

			</div>
			<hr width="89%">
			<center><input type="submit" value="SUBMIT YOUR VOTES" class="btn btn-primary"> 
			</center>
		</form>


	</div>






	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body>



</html>