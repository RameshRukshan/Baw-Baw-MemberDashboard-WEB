<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/header_top.php'; ?>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<img src="<?php echo base_url(); ?>/assets/img/logo.png" width="30%"><br><br>
							<h1 class="h2">Admin</h1>
							<p class="lead">
								Sign in to your admin account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="<?php echo base_url(); ?>assets/img/avatars/avatar.png" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>


						<?php if ($this->session->flashdata('lgmsg')) { ?>
    						<div class="text-danger">
    							<?php echo $this->session->flashdata('lgmsg'); ?>
    						</div>
    					<?php } ?>



								<?php echo validation_errors(); ?>
								<?php echo form_open('Welcome/loginCheck'); ?>
									<form method="POST">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your Username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
											<small>
            									<a href="index.html">Forgot password?</a>
          									</small>
										</div>
										<div>
											<label class="form-check">
            									<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
            									<span class="form-check-label">
              										Remember me next time
            									</span>
          									</label>
										</div>
										<div class="text-center mt-3">
											 <input class="btn btn-lg btn-primary" type="submit" name="btn_submit" value="Login">
											
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
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

	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>

</html>