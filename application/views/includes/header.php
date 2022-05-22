<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
        	
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">
										<?php
											$id = $this->session->userData('RMID');
											$where = "status=1 AND (assignee=$id OR assignee=0)";
											$this->db->where($where);
											$this->db->from('notification');
											$query = $this->db->get();
											echo $query->num_rows();
										?>
									</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									<?php
										$where = "status=1 AND (assignee=$id OR assignee=0)";
										$this->db->where($where);
										$this->db->from('notification');
										$query = $this->db->get();
										echo $query->num_rows();
									?>
									 New Notifications
								</div> 
								<div class="list-group">

									<?php 

									$where = "status=1 AND (assignee=$id OR assignee=0)";
									$this->db->where($where);
        							$query = $this->db->get('notification');
        							$new_notification = $query->result();

									foreach ($new_notification as $new_n) { ?>

									<a href="<?php echo base_url(); ?>notifications" class="list-group-item">
										<div class="row g-0 align-items-center" >
											<div class="col-2">
												<img src="<?php echo base_url(); ?>assets/img/icons/noti-icon.png">
											</div>
											<div class="col-10" onclick="

										<?php 
											$this->db->set('status', 0);
        									$id = $new_n->id;
        									$this->db->where('id',$id);
        									$this->db->update('notification'); 
        								?>

        								">
												<div class="text-dark"><?php echo $new_n->title; ?></div>
												<div class="text-muted small mt-1"><?php echo $new_n->short_desccription; ?></div>
											</div>
										</div>
									</a>

									<?php } ?>

								</div>
								<div class="dropdown-menu-footer">
									<a href="<?php echo base_url(); ?>notifications" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/img/avatars/avatar.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo $this->session->userData('fName'); ?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="<?php echo base_url(); ?>profile"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>admin"><i class="align-middle me-1" data-feather="log-out"></i>Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>