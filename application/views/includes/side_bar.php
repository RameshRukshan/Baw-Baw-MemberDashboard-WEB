<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Baw-Baw Admin</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item <?php if($this->uri->segment(1) == '') { echo 'active'; } ?>">
						<a class="sidebar-link" href="<?php echo base_url(); ?>">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item <?php if($this->uri->segment(1) == 'profile') { echo 'active'; } ?>">
						<a class="sidebar-link" href="<?php echo base_url(); ?>profile">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					</li>

					<li class="sidebar-item <?php if($this->uri->segment(1) == 'add_animal') { echo 'active'; } ?>">
						<a class="sidebar-link" href="<?php echo base_url(); ?>add_animal">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Animal</span>
            </a>
					</li>

					<li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item <?php if($this->uri->segment(1) == 'map') { echo 'active'; } ?>">
						<a class="sidebar-link" href="<?php echo base_url(); ?>map">
              		<i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            		</a>
					</li>

					<li class="sidebar-item <?php if($this->uri->segment(1) == 'notifications') { echo 'active'; } ?>">
						<a class="sidebar-link" href="<?php echo base_url(); ?>notifications">
              <i class="align-middle" data-feather="bell"></i> <span class="align-middle">Notifications</span>
            </a>
            <hr> 
					</li>

					<li class="btn btn-danger align-bottom" style="margin-left: 20px; margin-top: 2%">
						<a class="btn btn-danger" href="<?php echo base_url(); ?>admin">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log-Out</span>
            </a>
					</li>

				</ul>
			</div>
		</nav>

