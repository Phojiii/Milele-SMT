<html>

	<head>
		<title>Login Form in CodeIgniter 4</title>
	</head>

	<body>

		<h3>Login Form</h3>
		<?= isset($error) ? $error : '' ?>
		<?= form_open('demo/process_login') ?>
			<table cellpadding="2" cellspacing="2">
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username" required="required">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password" required="required">
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" value="Login">
					</td>
				</tr>
			</table>
		<?= form_close() ?>

	</body>

</html>
		