<?php
include_once('classes/userdata.class.php');
?>
<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
		<div id="header">
			<ul>
				<li><a href="profile.php">Edit Your profile</a></li>
				<li style="float:right"><a href="classes/logout.class.php">Logout</a>	</li>
			</ul>
		</div>

		<div class="info">
			<div class='pageText'>
				<h2><b class='pageTextH'><?php $userData->showUser(); ?></b> You are logged in!<br/></h2>
				<p>Your E-mail is: <b class='pageTextH'><?php echo $userEmail; ?></b> </p>
				<p>Your status is:
					<b class='pageTextH'><?php	if($userPrivil == 1) {echo 'Administrator';}	else {echo "Użytkownik";}?></b>
				</p>
			</div>
		</div>
	</body>
</html>	
