<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #ffc107;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<h2 align="center">
						<?php
							$conn = mysqli_connect('parattakorn.mysql.database.azure.com', 'it63070101@parattakorn', 'UNDdws73', 'itflab');
							if (mysqli_query($conn, 'DELETE FROM guestbook WHERE ID = '.$_GET['ID'].'')) {
								echo 'DELETE COMPLETED';
							}
							else {
								echo 'ERROR!';
							}
						?>
						</h2>
						<p align="center"><a href="show.php" class="btn btn-sm btn-dark">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
