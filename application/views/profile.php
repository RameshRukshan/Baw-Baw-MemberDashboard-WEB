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
						<h1 class="h3 d-inline align-middle">Profile</h1>
						
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="<?php echo base_url(); ?>assets/img/avatars/avatar.png" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0"><?php echo $this->session->userData('fName'); echo(' '); echo $this->session->userData('lName'); ?></h5>
									<div class="text-muted mb-2"><?php echo $this->session->userData('position'); ?></div>

								</div>
								
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> Phone <a href="#">+94<?php echo $this->session->userData('phone'); ?></a></li>
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#"><?php echo $this->session->userData('address'); ?></a></li>
										<li class="mb-1"><span data-feather="mail" class="feather-sm me-1"></span> E-Mail <a href="#"><?php echo $this->session->userData('email'); ?></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Resques</h5>
								</div>
								<div class="card-body h-100">

									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<small class="float-end text-navy">10 Jan 2022</small>
											<strong>Puppy</strong> Saved at <strong>Matara</strong><br />
											<small class="text-muted">Status : Sucessfully Rescued</small><br />

										</div>
									</div>

									<hr />
									<div class="d-flex align-items-start">
										<div class="flex-grow-1">
											<small class="float-end text-navy">30 Nov 2021</small>
											<strong>Cow</strong> posted something on <strong>Mahinda Rajapaksha</strong>'s timeline<br />
											<small class="text-muted">Status : Sucessfully Failed</small>

											<div class="border text-sm text-muted p-2 mt-1">
												Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
												pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
											</div>
										</div>
									</div>
									<hr />
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