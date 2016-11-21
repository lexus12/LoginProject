<?php

			//shows info about about successful registration
			if(isset($_SESSION['user_registered']) && $_SESSION['user_registered'] == true) {
				echo "Register new account<br/> Login please!";
				$_SESSION['user_registered'] = false;
			}
			//shows info about not all fields filled propertly
			if(isset($_SESSION['fill_all_fields']) && $_SESSION['fill_all_fields'] == true) {
				echo "Fill all fields<br/>";
				$_SESSION['fill_all_fields'] = false;
			}

			//shows info about not all fields filled propertly
			if(isset($_SESSION['data_err']) && $_SESSION['data_err'] == true) {
				echo "Incorrect Nick or Password<br/>";
				$_SESSION['data_err'] = false;
			}
			
			if(isset($_SESSION['pass_err']) && $_SESSION['pass_err'] == true) {
				echo "Your password should have at least 6 characters";
				$_SESSION['pass_err'] = false;
			}

			if(isset($_SESSION['pass_err2']) && $_SESSION['pass_err2'] == true) {
				echo "Passwords should be equals";
				$_SESSION['pass_err2'] = false;
			}

			if(isset($_SESSION['email_err']) && $_SESSION['email_err'] == true) {
				echo "Write correct E-mail address";
				$_SESSION['email_err'] = false;
			}

			if(isset($_SESSION['user_exists_err']) && $_SESSION['user_exists_err'] == true) {
				echo "User with that E-mail allready exists";
				$_SESSION['user_exists_err'] = false;
			}

			if(isset($_SESSION['register_err']) && $_SESSION['register_err'] == true) {
				echo "Registration error try again";
				$_SESSION['register_err'] = false;
			}
			
			if(isset($_SESSION['nickChange']) && $_SESSION['nickChange'] == true) {
				echo "Your Nick was changed";
				$_SESSION['nickChange'] = false;
			}
?>
