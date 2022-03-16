<html>

<head>
	<?php include './templates/header.php' ?>
</head>

<body>

	<div class="container-fluid">
		<h1>Sito di Tortorici Nico</h1>
		<form>

			<div class="row flex-xl-nowrap justify-content-center">
				<main class="col col-xs-12 col-sm-10 col-md-6 col-lg-6 col-xl-4 py-md-4 py-md-5">
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" id="inputEmail">
					</div>
					<div class="form-group">
						<label for="inputPassword">Password</label>
						<input type="password" class="form-control" id="inputPassword">
					</div>
					<a href='sign-up'>Non hai un account? Registrati.</a> <br>
					<button class="btn btn-primary">Accedi</button>
					<br>
					<img src="./imgs/qr-code.png" alt="" />
				</main>
			</div>

		</form>
	</div>

	<?php include './templates/footer.php' ?>
</body>

</html>