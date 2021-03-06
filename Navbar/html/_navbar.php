<head>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Navbar/css/navbar.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo $_SESSION['url']; ?>Navbar/js/navbar.js"></script>
  <script src="<?php echo $_SESSION['url']; ?>Navbar/js/navbar-burger.js"></script>  
</head>
<nav class="navbar navbar-fixed-top scrolledToTop" style="z-index: 100;">
<!-- <div style="margin: 0 4% auto"> -->
	<div class="navbar-brand" style="margin-left: 4%">
		<a class="navbar-item company-logo" id="company-logo" href="<?php echo $_SESSION['url']; echo ($_SESSION['type']=='admin')?'Backend/html/index.php':'index.php';?>" >
			<img id="company-symbol" src="<?php echo $_SESSION['url']; ?>Static/images/logo.png">&nbsp;&nbsp;
			<img id="navbarLogo" class="whiteLogo" src="<?php echo $_SESSION['url']; ?>Static/images/company_name_white.png">		
		</a>

		<a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
			<span class="icon" style="color: #55acee;">
				<i class="fa fa-twitter"></i>
			</span>
		</a>

		<!-- <div class="navbar-burger burger" data-target="navMenubd-example" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');"> -->
		<div class="navbar-burger burger" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
		<!-- <div class="navbar-burger burger" href="javascript:;"> -->
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div id="navMenubd-example" class="navbar-menu">
		<div class="navbar-start" id="centered-menus">
			<a class="navbar-item" href="#home-section" id="home-menu">
				<span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">Home</span>
			</a>
			<a class="navbar-item" href="#news-section" id="news-menu">
				<span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">News</span>
			</a>
			<a class="navbar-item" href="#services-section" id="services-menu">
				<span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">Services</span>
			</a>
			<a class="navbar-item" href="#professionals-section" id="professionals-menu">
				<span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">Professionals</span>
			</a>

		</div>
		<div class="navbar-end">
			<!-- <div class="navbar-item">
				<div class="field is-grouped">
					<p class="control">
						<a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://bulma.io" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&hashtags=bulmaio&url=http://bulma.io&via=jgthms">
							<span class="icon">
									<i class="fa fa-twitter"></i>
							</span>
							<span>
									Tweet
							</span>
						</a>
					</p>
				</div>
			</div>
		</div> -->
	<?php

		if(isset($_SESSION['id']))
		{
			if($_SESSION['type'] == 'admin')
			{
				echo 	'<a class="backend-link" href="'.$_SESSION['url'].'Backend/html">
							<div class="navbar-item backend-link-container">
								<span class="hero navbarLinks backend-link-text">Backend</span>
							</div>
						</a>';
			}

			if($_SESSION['type'] == 'psy')
			{
				echo 	'<a class="backend-link" href="'.$_SESSION['url'].'Reports/html/report.php" target="_blank">
							<div class="navbar-item backend-link-container">
								<span class="hero navbarLinks backend-link-text">Reports</span>
							</div>
						</a>';
			}

			echo '<div class="navbar-item navbarLinks has-dropdown is-hoverable navbar-menu" id="account-menu">
							<a class="navbar-link  is-active" href="javascript:;">
											<figure class="image is-32x32" id="user-avatar-div">
															<span id="user-avatar-1">
																	<img id="user-avatar" src="'.($_SESSION['pic'] != NULL?$_SESSION['url'].$_SESSION['pic']:$_SESSION['url']."Static/images/profile-placeholder.jpg").'">
															</span>
													</figure>
													<span id="user-name">
									'.$_SESSION['username'].'
									</span>
							</a>
							<div class="navbar-dropdown ">
								<a class="navbar-item navbarLinks" href="'.$_SESSION['url'].'settings.php">
									Edit Profile
								</a>
								<a class="navbar-item navbarLinks" href="'.$_SESSION['url'].'settings.php">
									Settings
								</a>
								<hr id="sign-out-divider">
								<a class="navbar-item navbarLinks" href="'.$_SESSION['url'].'logout.php">
									Sign Out
								</a>
							</div>
						</div>';
		}
		else{
			echo /*'<a class="navbar-item navbarLinks navbar-menu" href="javascript:;" onclick="showmodal()">Log In</a>

				<script>

					function showmodal(){

						var modal = new DayPilot.Modal({
								onClosed: function(args) {
								if (args.result) { 
									window.location.replace("'.$_SESSION['url'].'index.php");
								}
							}
						});
						modal.showUrl("'.$_SESSION['url'].'Authentication/Login/index.php");
					};

				</script>';
				$(".login-modal-background").removeClass("modal-hidden");*/
				'<a class="navbar-item navbarLinks navbar-menu" href="javascript:;" onclick="showmodal()">Log In</a>

				<script>

					function showmodal(){
						$(".login-modal-background").fadeIn().delay(200);
						$(".login-modal-background").addClass("blurred");
						$(".login-modal-container").fadeIn();
						$(".login-modal").fadeIn();
						document.getElementById("username").focus();
					};

				</script>';
		}
	?>
	</div>
</nav>
