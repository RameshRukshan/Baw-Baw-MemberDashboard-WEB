<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/header_top.php'; ?>
</head>

<body>
	<div class="wrapper">
		<?php include 'includes/side_bar.php'; ?>

		<div class="main">
			<?php include 'includes/header.php'; ?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Cards</h1>
					</div>
					<div class="row">

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with links</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link">Animal Location</a>
									<a href="#" class="card-link">Medical Center Locat</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with button</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with links</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link">Animal Location</a>
									<a href="#" class="card-link">Medical Center Locat</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<?php include 'includes/footer.php'; ?>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>

</html>