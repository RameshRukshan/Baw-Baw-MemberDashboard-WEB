<!-- Start Navbar Area -->
<div class="navbar-area">
	<div class="mobile-nav">
		<div class="container">
			<a href="javascript:void" class="logo">
				<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo">
			</a>
		</div>
	</div>

	<div class="main-nav">
		<div class="container">
			<nav class="navbar navbar-expand-md">
				<a class="navbar-brand" href="javascript:void">
					<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo">
				</a>

				<div class="collapse navbar-collapse mean-menu">
					<ul class="navbar-nav m-auto">
						<li class="nav-item ">
							<a href="<?php echo base_url(); ?>" class="nav-link <?php if($this->uri->segment(1) == '') { echo 'active'; } ?>">Home</a>
						</li>

						<li class="nav-item ">
							<a href="<?php echo base_url(); ?>products" class="nav-link <?php if($this->uri->segment(1) == 'products') { echo 'active'; } ?>">Our Products</a>
						</li>

						<li class="nav-item ">
							<a href="<?php echo base_url(); ?>services" class="nav-link <?php if($this->uri->segment(1) == 'services') { echo 'active'; } ?>">Our Services</a>
						</li>

						<li class="nav-item ">
							<a href="<?php echo base_url(); ?>tech_support" class="nav-link <?php if($this->uri->segment(1) == 'tech_support') { echo 'active'; } ?>">Tech Support</a>
						</li>

						<li class="nav-item ">
							<a href="<?php echo base_url(); ?>about" class="nav-link <?php if($this->uri->segment(1) == 'about') { echo 'active'; } ?>">About Us</a>
						</li>

						<li class="nav-item ">
							<a href="<?php echo base_url(); ?>contact" class="nav-link <?php if($this->uri->segment(1) == 'contact') { echo 'active'; } ?>">Contact Us</a>
						</li>
					</ul>

					<div class="others-option">

						<div class="get-quote">
							<a href="<?php echo base_url(); ?>tech_support" class="default-btn">
								<span>Tech Support</span>
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<div class="others-option-for-responsive">
		<div class="container">
			<div class="dot-menu">
				<div class="inner">
					<div class="circle circle-one"></div>
					<div class="circle circle-two"></div>
					<div class="circle circle-three"></div>
				</div>
			</div>

			<div class="container">
				<div class="option-inner">
					<div class="others-option justify-content-center d-flex align-items-center">
						<div class="get-quote">
							<a href="<?php echo base_url(); ?>tech_support" class="default-btn">
								<span>Tech Support</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- End Navbar Area -->