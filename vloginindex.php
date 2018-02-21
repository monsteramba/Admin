<?php
session_start();
  if (isset($_SESSION['voters_id'])) {
    header('Location:');
  }
?>
<!DOCTYPE html>
<html>

	<head>

		<title>VOTING HUB</title>
	<!-- Materlize-->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

	<!-- Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
		
	</head>
	<body style="font-family:roboto">

		<div class="">
		
		<div class="panel panel-primary center" style="width:500px;margin:150px auto 0 auto;">
			<div class="panel-heading"><h4>Society of Computer Architects Elections</h4></div>
			<div class="panel-body">

				<form style="width:50%; margin:0 auto; text-align:center;" method="post" class="center" action="vlogin.php">
					<table>
						<tr>
							<td colspan="2" align="center" id="result">&nbsp;</td>
						</tr>
						<tr>
							<td>Voter's ID:</td>
							<td><input class="form-control" type="text" name="voters_id" id="password" data-options="required:true"></input></td>
						</tr>
						<tr><td>&nbsp;</td></tr>
						<tr>
							<td></td>
							<td colspan="2" align="center"><input type="submit" href="javascript:void(0);"  class="btn btn-primary" id="submitbutton" style="width:80%;" value="Submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

		</div>
		<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	</body>

</html>
