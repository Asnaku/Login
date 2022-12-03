<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>



<!DOCTYPE html>
<html>

<head>
	<!-- <style>
		h1 {
			text-align: center;
		}

		p {
			text-align: center;
		}

		div {
			text-align: center;
		}
	</style> -->
	<title>My website</title>
</head>

<body>
	<!-- <h1>Hello, <?php echo $user_data['user_name']; ?></h1>

	<p>
		<em>
			<a href="http://localhost/Book%20Store/CRUD/index.php">Click to open Book Store</a>
		</em>
	</p>
	<br>
	<p>
		<em>
			<a href="logout.php">Logout</a>
		</em>
	</p> -->
</body>

</html>