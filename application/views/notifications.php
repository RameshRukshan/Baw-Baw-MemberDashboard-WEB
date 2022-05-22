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
						<h1 class="h3 d-inline align-middle">Notifications</h1>
					</div>
					<div class="row">

						<?php
							$id = $this->session->userData('RMID');
							$this->db->order_by('id', 'desc');
							$this->db->where('assignee', $id);
							$query = $this->db->get('notification');

							$notifi = $query->result();

							foreach ($notifi as $notification) {
						?>

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><?php echo $notification->title; ?></h5>
								</div>
								<div class="card-body">
									<p class="card-text"><?php echo $notification->message; ?></p>
									<?php 
										$link = $notification->link;
										if (strlen($link) == 0){

										}else{ 
											echo "<a href='$notification->link' class='btn btn-primary'>Link</a>";
										}
									?>
								</div>
							</div>
						</div>

						<?php } ?>

						
					</div>

				</div>
			</main>

			<?php include 'includes/footer.php'; ?>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>

</html>