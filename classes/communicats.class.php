<?php

			if(isset($_SESSION['nickChange']) && $_SESSION['nickChange'] == true) {
				echo "Your Nick was changed";
				$_SESSION['nickChange'] = false;
			}
			
			if(isset($_SESSION['passChange']) && $_SESSION['passChange'] == true) {
				echo "Your Password was changed";
				$_SESSION['passChange'] = false;
			}
			
			if(isset($_SESSION['emailChange']) && $_SESSION['emailChange'] == true) {
				echo "Your Email was changed";
				$_SESSION['emailChange'] = false;
			}
			//shows info about about successful registration
			if(isset($_SESSION['user_registered']) && $_SESSION['user_registered'] == true) {
				echo "Register new account<br/> Login please!";
				$_SESSION['user_registered'] = false;
			}
			
			if(isset($_SESSION['user_logout']) && $_SESSION['user_logout'] == true) {
				echo "Successfully logged out<br/> See You later!";
				$_SESSION['user_logout'] = false;
			}
