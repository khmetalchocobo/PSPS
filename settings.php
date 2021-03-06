<?php
  	session_start();
  	require('Database/config.php');
	
	$updateuser = $_SESSION['id'];
	$selectuser = "SELECT user_name, user_email FROM tbl_users WHERE user_id=$updateuser";
	$usertype = mysqli_real_escape_string($db, $_SESSION['type']);

	$userdata = $db->query($selectuser);
	$data = $userdata->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Psyche Solution Psychological Services</title>

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/main.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Navbar/css/navbar.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Homepage/css/hero.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/settings.css" />
    <link rel="icon" href="<?php echo $_SESSION['url']; ?>Static/images/logo.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo $_SESSION['url']; ?>Homepage/js/main.js"></script>
    <script src="<?php echo $_SESSION['url']; ?>Navbar/js/navbar.js"></script>
    <script src="<?php echo $_SESSION['url']; ?>Navbar/js/navbar-burger.js"></script>
</head>
<body>
<!-- <main class="wrapper"> -->
<div class="main">
	<div class="navbar-wrapper">
	  	<?php
			include('Navbar/html/_navbar.php');
		?>
	</div>
	<div class="content-wrapper">			
		<div class="card box">
			<div class="card-header">
				<p class="card-header-title">Account Settings</p>
			</div>
			<div class="card-content">
				<form id="form" method=POST enctype=multipart/form-data action="">					
					<div class="field">
						<label> Username </label>
						<div class="control">
							<input type="text" class="input" name="new_username" value="<?php echo $data['user_name']; ?>" autofocus>
						</div>
					</div>
					<div class="field">
						<label> Email </label>
						<div class="control">
							<input type="text" class="input" name="new_email" value="<?php echo $data['user_email']; ?>">
						</div>
					</div>
					<div class="field">
						<label> New password </label>
						<div class="control">
							<input type="password" class="input" name="new_pass">
						</div>
					</div>
					<div class="field">
						<label> Confirm Password </label>
						<div class="control">
							<input type="password" class="input" name="new_passcon">
						</div>
					</div>
					<?php
						if($usertype == 'psy')
						{
							echo '<div class="field">
								<label> Additional Information </label>
								<div class="control">
									<textarea rows="10" class="input" name="new_additional" style="resize: none; height: 8rem;"></textarea>
								</div>
							</div>';
						}
					?>

					<hr>
					<div class="level">
						<div class="file">
							<label class="file-label">
								<input class="file-input" type="file" name="fileToUpload" id="fileToUpload">
								<span class="file-cta">
									<!-- <span class="file-icon">
										<i class="fas fa-upload"></i>
									</span> -->
									<span class="file-label">
										Choose a file…
									</span>
								</span>
							</label>
						</div>
						<input type="submit" class="button is-primary" name="submit" value="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$target_dir = "Static/images/users/";
		$target_file = $target_dir . $_SESSION['id']."."."jpg";
		echo $target_file;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, there was an error.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$fileadd = ',picture='.$target_file;
		    	$_SESSION['pic']=$target_file;
		    } else {
		        $fileadd = "";
		        echo "Sorry, there was an error updating your profile.";
		    }
		}

		$username = $_POST['new_username'];
		$email = $_POST['new_email'];
		$pass = $_POST['new_pass'];
		$conpass = $_POST['new_passcon'];

		if($pass == $conpass){

			$password = md5($pass);
			if (!empty($pass)) {
				$passadd = ",user_password=".$password;
			}else{
				$passadd = "";
			}
			$insertdata = "UPDATE tbl_users SET user_name = '$username',
												user_email='$email'"
												.$passadd
												.$fileadd."
											WHERE user_id='$updateuser'";
											
			$insert = $db->query($insertdata);
		
			

			if ($insert) {
				echo '<script type="text/javascript"> 
						alert("Data successfully updated");
						window.location.replace("index.php");
					</script>';
			} else {
				echo "Error updating record: " . $db->error;
			};

		} else {
			die ("Passwords do not match");
		};
	}
?>