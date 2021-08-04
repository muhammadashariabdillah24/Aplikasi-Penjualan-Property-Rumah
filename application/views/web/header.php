<?php
$link_1 = strtolower($this->uri->segment(1));
$ceks = $this->session->userdata('username_member@wp');
?>
<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<!-- Title here -->
		<title><?php echo $judul_web; ?></title>
		<base href="<?php echo base_url() ?>"/>

		<link rel="shortcut icon" href="img/logo.png">
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Navigation menu -->
		<link rel="stylesheet" href="assets/web/css/ddlevelsmenu-base.css">
		<link rel="stylesheet" href="assets/web/css/ddlevelsmenu-topbar.css">
		<!-- PrettyPhoto -->
		<link rel="stylesheet" href="assets/web/css/prettyPhoto.css">
		<!-- cSlider -->
		<link rel="stylesheet" href="assets/web/css/slider.css">
		<!-- Font awesome CSS -->
		<link href="assets/web/css/font-awesome.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="assets/web/css/style.css" rel="stylesheet">

		<!-- Favicon -->
		<link rel="shortcut icon" href="#">

		<script src="assets/js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox.css">
		<script type="text/javascript" src="assets/fancybox/jquery.fancybox.js"></script>

		<style>
		.gallery {
			background-color: #fff;
			padding: 5px;
			padding-top: 10px;
		}
		.gallery img {
		    width: 50%;
		    height: 120px;
		    border-radius: 5px;
		    cursor: pointer;
		    transition: .3s;
				margin-bottom: 5px;
		}
		.gallery a {
				text-decoration: none;
		}
		</style>
	</head>

	<body>

  <!-- Sliding panel starts-->

  <div class="slidepanel">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="spara">
            <!-- Contact details -->
            <p><i class="fa fa-envelope-o lightblue"></i> <?php echo $data_web->email; ?> &nbsp;
              <i class="fa fa-phone lightblue"></i> <?php echo $data_web->telp; ?>
            </p>
          </div>
        </div>
        <div class="col-md-4">
            <div class="social">
              <!-- Social media icons. Repalce # with your profile links -->
							<?php if ($data_web->fb != ''): ?>
												<a href="<?php echo $data_web->fb; ?>" class="bblue" target="_blank"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>
							<?php if ($data_web->google_plus != ''): ?>
	                      <a href="<?php echo $data_web->google_plus; ?>" class="borange" target="_blank"><i class="fa fa-google-plus"></i></a>
							<?php endif; ?>
							<?php if ($data_web->twitter != ''): ?>
                      <a href="<?php echo $data_web->twitter; ?>" class="blightblue" target="_blank"><i class="fa fa-twitter"></i></a>
							<?php endif; ?>
                      <!-- <a href="#" class="bviolet"><i class="fa fa-linkedin"></i></a>
                      <a href="#" class="bred"><i class="fa fa-pinterest"></i></a>
                      <a href="#" class="borange"><i class="fa fa-rss"></i></a> -->
            </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <!-- Sliding panel ends-->

  <!-- Header starts -->

  <header>
    <div class="container">
      <div class="row">

        <div class="col-md-3 col-sm-4">

          <!-- Logo starts -->

          <div class="logo">

            <div class="logo-image">
              <!-- Image link -->
              <a href="<?php echo base_url(); ?>">
								<img src="img/logo.png" alt="Logo <?php echo $data_web->nama_web; ?>" style="margin-top:10px;max-height:80px;">
							</a>
            </div>

            <!-- <div class="logo-text">
              <h1><a href="<?php echo base_url(); ?>"><?php echo $data_web->nama_web; ?></a></h1>
              <div class="logo-meta">web profile</div>
            </div> -->

            <div class="clearfix"></div>

          </div>

          <!-- Logo ends -->

        </div>

        <div class="col-md-9 col-sm-8">

          <!-- Navbar starts -->

          <div class="navi pull-right">
            <div id="ddtopmenubar" class="mattblackmenu">
              <!-- Main navigation -->
              <!-- Use the background color class in anchor tag for colorful menu -->
              <ul>

                <li>
									<a href="<?php echo base_url(); ?>" class="blightblue"> <i class="fa fa-home"></i> Home</a>
								</li>

                <li>
									<a href="about" class="bgreen"> <i class="fa fa-user-md"></i> About</a>
                </li>

								<li>
									<a href="artikel" class="bred"> <i class="fa fa-globe"></i> Artikel</a>
                </li>

                <li>
									<a href="help" class="borange"> <i class="fa fa-question-circle"></i> Help</a>
								</li>

                <!-- <li>
									<a href="kontak" class="bblue"> <i class="fa fa-envelope-o"></i> Kontak</a>
								</li> -->

								<li>
									<?php
									if ($ceks) {?>
										<a href="member" class="bblue"> <i class="fa fa-user"></i> Member</a>
									<?php
									}else{ ?>
										<a href="login" class="bblue"> <i class="fa fa-key"></i> Login</a>
									<?php
									} ?>
								</li>

								<li>
									<?php
									if ($ceks) {?>
										<a href="logout" class="bviolet" onclick="return confirm('Anda yakin?')"> <i class="fa fa-power-off"></i> Logout</a>
									<?php
									}else{ ?>
										<a href="register" class="bviolet"> <i class="fa fa-users"></i> Register</a>
									<?php
									} ?>
								</li>

              </ul>
            </div>
          </div>

          <div class="navis"></div>

          <!-- Navbar ends -->

          <div class="clearfix"></div>

        </div>

      </div>
    </div>
  </header>

  <div class="clearfix"></div>

  <!-- Header ends -->
