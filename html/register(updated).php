<?php
	include "../php/upload.php";
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Register - Psyche Solution Psychological Services</title>
<link rel="stylesheet" type="text/css" href="../css/top-bar.css">
<link rel="stylesheet" type="text/css" href="../css/register(updated).css">
<link rel="icon" href="../images/logo.png">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../js/tryjavascript.js"></script>
<!--<script type="text/javascript" src="../js/register.js"></script>-->
</head>
<?php include("../html/topbar.php"); ?>
<body>

<div id="container">
	<!--<div id="top-bar">-->
	<!--<?php include("../html/topbar.php"); ?>.
	<!--</div>-->
	<form action="#" method="post" enctype="multipart/form-data">							<!--register form start-->
		<?php include "../php/errors.php"; ?>
		
		<div id="reg-container">
			<!--Primary Account Information-->
			
			<label><b>Email</b></label>
			<input type="reg-text" placeholder="Enter Email" id="email" name="email" required>
			
			<label><b>Username</b></label>
			<input type="reg-text" placeholder="Enter Username" id="username" name="username" required>
			
			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" id="psw" name="psw" required>

			<label><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" id="psw-repeat" name="psw-repeat" required>
			
		</div>

		<div id="accountType">

			<form name = "radioButtons">

			<!--Select Account Type-->
			<p>Select Account Type</p>

				<input type="radio" id = "patientradbtn" name = "accountType" value="pat" onclick = "submitAccount()"> Patient <br>
				<input type="radio" id = "psyradbtn" name = "accountType" value="psy" onclick = "submitAccount()"> Psychologist <br>
				<input type="radio"	id = "intradbtn" name = "accountType" value="int" onclick = "submitAccount()"> Intern <br>
				<input type="radio" id = "revradbtn" name = "accountType" value="rev" onclick =  "submitAccount()"> Review Applicant <br>

			</form>

		</div>	

		<div id="patient_register_primary" class = "form">

			<!--Primary Patient Account Information-->
			<label><b>First Name</b></label>
			<input type="reg-text" placeholder="Enter First Name" name="firstName" required>
			
			<label><b>Middle Name</b></label>
			<input type="reg-text" placeholder="Enter Middle Name" name="middleName" required>
			
			<label><b>Last Name</b></label>
			<input type="reg-text" placeholder="Enter Last Name" name="lastName" required>
			
			<br><br><label><b>Gender</b></label>
			<select name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select><br><br>

			<label><b>Birth Date</b></label>
			<input type="reg-text" placeholder="Enter your birthdate" name="birthday" required>
			
			<label><b>Age</b></label>
			<input type="reg-text" placeholder="Enter Age" name="age" required>

			<label><b>Address</b></label>
			<input type="reg-text" placeholder="Enter Address" name="address" required>

			<label><b>Contact Number</b></label>
			<input type="reg-text" placeholder="Enter Contact Number" name="contact" required>
		
			<button type="button" onclick = "toNextForm()">Next</button>
			
		</div>

		<div id="patient_register_secondary" class = "form">

			<!--Secondary Patient Account Information-->
			<label><b>Religion</b></label>
			<input type="reg-text" placeholder="Enter Religion" name="religion" required>
			
			<label><b>Citizenship</b></label>
			<input type="reg-text" placeholder="Enter Citizenship" name="citizenship" required>
			
			<br><br><label><b>Marital Status</b></label>
			<select name="marital_status">
				<option value="male">Single</option>
				<option value="female">Married</option>
				<option value="female">Divorced</option>
				<option value="female">Widowed</option>
			</select><br><br>

			<label><b>Occupation</b></label>
			<input type="reg-text" placeholder="Enter Occupation" name="occupation">
			
			<label><b>Company Name</b></label>
			<input type="reg-text" placeholder="Enter Company" name="company_name">

			<label><b>Highest Educational Attainment</b></label>
			<input type="reg-text" placeholder="Enter highest educational attainment" name="high_attain">

			<label><b>School</b></label>
			<input type="reg-text" placeholder="Enter School" name="school">

			<label><b>Year Graduated</b></label>
			<input type="reg-text" placeholder="Enter School" name="school">

			<label><b>Other Information</b></label>
			<input type="reg-text" placeholder="Enter other information" name="other_info">
			
			<button type="button"  onclick="toPrevForm()">Previous</button>

			<div class="clearfix">

			<button type="submit" name="register"class="submitbtn">Submit</button>
			
			</div>
			
		</div>

		<div id="intern_register_primary" class = "form">

			<!--Primary intern Account Information-->
			<label><b>First Name</b></label>
			<input type="reg-text" placeholder="Enter First Name" name="firstName" required>

			<label><b>Middle Name</b></label>
			<input type="reg-text" placeholder="Enter Middle Name" name="middleName" required>

			<label><b>Last Name</b></label>
			<input type="reg-text" placeholder="Enter Last Name" name="lastName" required>

			<br><br><label><b>Gender</b></label>
			<select name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select><br><br>

			<label><b>Birth Date</b></label>
			<input type="reg-text" placeholder="Enter your birthdate" name="birthday" required>

			<label><b>Age</b></label>
			<input type="reg-text" placeholder="Enter Age" name="age" required>

			<label><b>Address</b></label>
			<input type="reg-text" placeholder="Enter Address" name="address" required>

			<label><b>Contact Number</b></label>
			<input type="reg-text" placeholder="Enter Contact Number" name="contact" required>

			<button type="button" onclick = "toNextForm()">Next</button>

		</div>

		<div id="intern_register_secondary" class = "form">

			<!--Secondary Intern Account Information-->
			<label><b>Religion</b></label>
			<input type="reg-text" placeholder="Enter Religion" name="religion" required>

			<label><b>Citizenship</b></label>
			<input type="reg-text" placeholder="Enter Citizenship" name="citizenship" required>

			<br><br><label><b>Marital Status</b></label>
			<select name="marital_status">
				<option value="male">Single</option>
				<option value="female">Married</option>
				<option value="female">Divorced</option>
				<option value="female">Widowed</option>
			</select><br><br>

			<label><b>Occupation</b></label>
			<input type="reg-text" placeholder="Enter Occupation" name="occupation">

			<label><b>Company Name</b></label>
			<input type="reg-text" placeholder="Enter Company" name="company_name">

			<label><b>School (Graduate School)</b></label>
			<input type="reg-text" placeholder="Enter Graduate School" name="graduate_school">

			<label><b>Year Graduated</b></label>
			<input type="reg-text" placeholder="Enter year graduated in Graduate School" name="year_graduate">

			<label><b>School (College)</b></label>
			<input type="reg-text" placeholder="Enter College" name="college_school">

			<label><b>Year Graduated</b></label>
			<input type="reg-text" placeholder="Enter year graduated from College" name="year_college">

			<label><b>Other Information</b></label>
			<input type="reg-text" placeholder="Enter other information" name="other_info">

			<button type="button"  onclick="toPrevForm()">Previous</button>

			<div class="clearfix">

			<button type="submit" name="register"class="submitbtn">Submit</button>
			
			</div>

		</div>

		<div id = "prof_form" class = "form">

			<label><b>First Name</b></label>
			<input type="reg-text" placeholder="Enter First Name" name="firstName" required>

			<label><b>Middle Name</b></label>
			<input type="reg-text" placeholder="Enter Middle Name" name="middleName" required>

			<label><b>Last Name</b></label>
			<input type="reg-text" placeholder="Enter Last Name" name="lastName" required>

			<label><b>Expertise</b></label>
			<input type="reg-text" placeholder="Please separate with comma (,)" name="expertise" required>

			<label><b>Information</b></label>
			<input type="reg-text" placeholder="Please enter summary of your profession" name="summary" required>

				<div class="clearfix">

					<button type="submit" name="register" class="submitbtn">Submit</button>

				</div>

		</div>

		<div id="review_register_primary" class = "form">

			<!--Primary intern Account Information-->
			<label><b>First Name</b></label>
			<input type="reg-text" placeholder="Enter First Name" name="firstName" required>

			<label><b>Middle Name</b></label>
			<input type="reg-text" placeholder="Enter Middle Name" name="middleName" required>

			<label><b>Last Name</b></label>
			<input type="reg-text" placeholder="Enter Last Name" name="lastName" required>

			<br><br><label><b>Gender</b></label>
			<select name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select><br><br>

			<label><b>Contact Number</b></label>
			<input type="reg-text" placeholder="Enter Contact Number" name="contact" required>

			<label><b>Age</b></label>
			<input type="reg-text" placeholder="Enter Age" name="age" required>

			<label><b>Birth Date</b></label>
			<input type="reg-text" placeholder="Enter your birthdate" name="birthday" required>

			<button type="button" onclick = "toNextForm()">Next</button>

		</div>

		<div id="review_register_secondary" class = "form">

			<!--Primary intern Account Information-->
			<label><b>Subject Grade in the following:</b></label><br><br>

			<label><b>Psychological Assessment</b></label>
			<input type="reg-text" placeholder="What is your grade in Psychological Assessment" name="grade_psych" required>

			<label><b>Theories of Personality</b></label>
			<input type="reg-text" placeholder="What is your grade in Theories of Personality" name="grade_theor" required>

			<label><b>Abnormal Psychology</b></label>
			<input type="reg-text" placeholder="What is your grade in Abnormal Psychology" name="grabe_abnorm" required>

			<label><b>Industrial/Organizational Psychology</b></label>
			<input type="reg-text" placeholder="What is your grade in Industrial/Organizational Psychology" name="grade_iop" required>

			<br>
			<br>

			<label><b>GPA/GWA (General Point/Weight Average)</b></label>
			<input type="reg-text" placeholder="What is your GPA/GWA (General Point/Weight Average)" name="gpa" required>

			<label><b>Favorite among the 4 Board Exam Subjects</b></label>
			<input type="reg-text" placeholder="What is your favorite among the 4 Board Exam Subjects" name="fave_subj" required>

			<label><b>Weakest among the 4 Board Exam Subjects</b></label>
			<input type="reg-text" placeholder="What is your least favorite among the 4 Board Exam Subjects" name="least_fave" required>

			<button type="button"  onclick="toPrevForm()">Previous</button>

			<div class="clearfix">

			<button type="submit" name="register" class="submitbtn">Submit</button>
			
			</div>

		</div>

	</form>														<!--register form end-->
</div>

</body>
</html>