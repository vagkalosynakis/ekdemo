<?php

	if (isset($_POST['submit'])) {
		
		include_once 'DB_config.php';

		$first = mysqli_real_escape_string($conn, $_POST['fname']);
		$last = mysqli_real_escape_string($conn, $_POST['lname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$uid = mysqli_real_escape_string($conn, $_POST['userid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//Empty Fields
		if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
			header("Location: ../index.php");
			exit();
		}else {
			//Allowed Characters
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../index.php");
				exit();
			}else {
				//Valid Email
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../index.php");
					exit();
				}else {
					$sql = "SELECT * FROM users WHERE user_uid='$uid';";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					//Username Taken
					if ($resultCheck > 0) {
						header("Location: ../index.php?");
						exit();
					}else {
						$pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
						$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwdHash');";
						mysqli_query($conn, $sql);
						header("Location: ../index.php?success");
						exit();						
					}
				}
			}
		}

	}else {
		header("Location: ../register.php");
		exit();
	}

?>