<?php

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
			
			if(isset($_SESSION['len_pass_err']) && $_SESSION['len_pass_err'] == true) {
				echo "Your password should have at least 6 characters";
				$_SESSION['len_pass_err'] = false;
			}

			if(isset($_SESSION['pass_err2']) && $_SESSION['pass_err2'] == true) {
				echo "Passwords should be equal";
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
			
			if(isset($_SESSION['userN_exists_err']) && $_SESSION['userN_exists_err'] == true) {
				echo "User with that Nick allready exists!";
				$_SESSION['userN_exists_err'] = false;
			}

			if(isset($_SESSION['register_err']) && $_SESSION['register_err'] == true) {
				echo "Registration error try again";
				$_SESSION['register_err'] = false;
			}
						
			if(isset($_SESSION['curr_pass_err']) && $_SESSION['curr_pass_err'] == true) {
				echo "Write a valid current password!";
				$_SESSION['curr_pass_err'] = false;
			}

			if(isset($_SESSION['account_delete']) && $_SESSION['account_delete'] == true) {
				echo "Your Account is no longer exists!";
				$_SESSION['account_delete'] = false;
			}
