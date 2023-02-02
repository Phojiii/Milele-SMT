<html>

	<head>
		<title>Login Form in CodeIgniter 4</title>
	</head>

	<body>

		Welcome <?= session('username') ?>
		<br>
		<a href="<?= site_url('demo/logout') ?>">Logout</a>

	</body>

</html>