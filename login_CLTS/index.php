<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<!-- title -->
	<h1 class="system_title">ADAAA Communication Logs Tracking System</h1>

	<!-- Form -->
	<div class="login_form">
		<form action="login.php" method="post">
			<h2>LOGIN</h2>
			
			<div class="input-box">
				<input type="text" name="uname" placeholder="Staff ID"><i class='bx bxs-user' ></i>
			</div>

			<div class="input-box">
				<input type="password" name="password" placeholder="Password"><i class='bx bxs-lock-alt' ></i><br>
			</div>
			
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>

			<button type="submit" class="login_btn">Login</button>
		</form>
	</div>
</body>
</html>

<!-- End of file -->