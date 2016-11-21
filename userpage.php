<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
		<div class="info">
			<h2><?php $userData->showUser(); ?> You are logged in!<br/></h2>
			<p>Your E-mail is: <b><?php echo $userEmail; ?></b> </p>
			<p>Your status is:
				<b><?php	if($userPrivil == 1) {echo 'Administrator';}	else {echo "Użytkownik";}?></b>
			</p>
			<div>
				<a href="classes/profile.class.php" class="lnk">Edit your profile</a>
			</div>
			<div>
				<a href="classes/logout.class.php" class="lnk">Logout</a>
			</div>
		</div>
	</body>
</html>	
