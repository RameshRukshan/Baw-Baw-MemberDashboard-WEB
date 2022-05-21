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
						<h1 class="h3 d-inline align-middle">Maps</h1>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Rescue Map</h5>
									<h6 class="card-subtitle text-muted">Displays the default road map view.</h6>
								</div>
								<div class="card-body">
									<div class="content" id="default_map" style="height: 300px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Medical Center Map</h5>
									<h6 class="card-subtitle text-muted">Displays a mixture of normal and satellite views.</h6>
								</div>
								<div class="card-body">
									<div class="content" id="hybrid_map" style="height: 300px;">
										
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
	<script>
		function initMaps() {
			var defaultMap = {
				zoom: 14,
				center: {
					lat: 40.712784,
					lng: -74.005941
				},
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			new google.maps.Map(document.getElementById("default_map"), defaultMap);
			var hybridMap = {
				zoom: 14,
				center: {
					lat: 40.712784,
					lng: -74.005941
				},
				mapTypeId: google.maps.MapTypeId.HYBRID
			};
			new google.maps.Map(document.getElementById("hybrid_map"), hybridMap);
		}
	</script>
	<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfV9S2dYybzPcdQG4KuN_aS-zot2IxVNM&callback=initMap">
	</script>


</body>

</html>