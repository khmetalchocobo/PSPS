<?php session_start() ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/bulma/bulma-pageloader.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $_SESSION['url']; ?>Static/css/font-awesome/font-awesome.css" />
	
	<title>Comprehensive Report</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<div id="text"></div>

		<form name="loginform" id="loginform" method="post">

			<!-- I. Identifying Data -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> I. Identifying Data </label>
				
				<label class="label is-small"> Name: </label> <input class="input" type="text" name="i_name">
				<label class="label is-small"> Address: </label> <input class="input" type="text" name="i_address">
				<label class="label is-small"> Gender: </label>
					<div class="select">
						<select name="gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				<label class="label is-small"> Age: </label> <input class="input" type="text" name="i_age">
				<label class="label is-small"> Date of Birth: </label> <input class="input" type="text" name="i_dob">
				<label class="label is-small"> School: </label> <input class="input" type="text" name="i_school">
				<label class="label is-small"> Grade Level: </label> <input class="input" type="text" name="i_grlvl">
				<label class="label is-small"> Date of Testing: </label> <input class="input" type="text" name="i_tdate">
				<label class="label is-small"> Place of Testing: </label> <input class="input" type="text" name="i_tplace">

				</div>
			</div>
			
			<!-- II. Reason/s for Referral -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> II. Reason(s) for Referral </label>
				<textarea class="textarea" name="ii_reasons"> </textarea>

				</div>
			</div>

			<!-- III. Psychological Test/s Administered -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> III. Psychological Test/s Administered </label>
				<textarea class="textarea" name="iii_test"> </textarea>

				</div>
			</div>

			<!-- IV. Results and Interprations -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> IV. Results and Interpretations </label>
				<textarea class="textarea" name="iv_results	"> </textarea>

				</div>
			</div>

			<!-- V.Remarks -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> V. Remarks </label>
				<textarea class="textarea" name="v_remarks"> </textarea>

				</div>
			</div>

			<!-- VI. Recommendations -->
			<div class="container box">
				<div class="field">

				<label class="label is-medium"> VI. Recommendation/s </label>
				<textarea class="textarea" name="vi_recom"> </textarea>

				</div>
			</div>

		</form>

</body>
</html>