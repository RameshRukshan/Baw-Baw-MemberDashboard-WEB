<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Links of CSS files -->
<link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="canonical" href="https://demo-basic.adminkit.io/" />

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/icons/icon-48x48.png" />

<!-- Title -->
<title>Baw-Baw Admin</title>

<?php
	if(!$this->session->userData('loginStatus')){
		//redirect('admin');
	}
?>