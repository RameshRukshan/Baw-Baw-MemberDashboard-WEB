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

		<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">

							<?php 
							if ($this->session->flashdata('adn')) {
    							echo $this->session->flashdata('adn');
    						} 
    						?>
    						<br>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<?php echo validation_errors(); ?>
									<?php echo form_open('Welcome/addAnimal'); ?>
									<form method="POST">
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter Animal Name" />
										</div>
										<div class="mb-3">
											<label class="form-label">Location</label>
											<input class="form-control form-control-lg" type="text" name="location" placeholder="Enter google location" />
										</div>
										<div class="mb-1">
											<label class="form-label">Age</label>
											<input class="form-control form-control-lg" type="number" name="age" placeholder="Enter Animal Age" />
										</div>
										<div class="mb-1">
											<label class="form-label">Gender</label><br>
            								<input class="form-check-input" type="radio" value="male" name="gender" style="margin-left: 20px;" checked>
            								<span class="form-check-label">Male</span>
            								<input class="fform-check-input" type="radio" value="female" name="gender">
            								<span class="form-check-label">Female</span>
          								</div>
										<div class="mb-3">
											<label class="form-label">Type</label>
											<select name="type" class="form-select mb-3">
          										<option selected value="">Open this select menu</option>
          										<option value="dog">Dog</option>
          										<option value="cat">Cat</option>
          										<option value="cattle">Cattle</option>
          										<option value="rabbit">Rabbit</option>
        									</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Description</label>
											<textarea class="form-control form-control-lg" name="description" rows="2" placeholder="Textarea"></textarea>
										</div>
										<div class="text-center mt-3">
											<input type="submit" name="add" class="btn btn-lg btn-primary" value="Add Animal Data">
										</div>
									</form>
									<?php echo form_close(); ?>
								</div>
							</div>
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